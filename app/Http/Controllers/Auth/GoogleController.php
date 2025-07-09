<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Auth\InvestwellController;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        // Redirect to Google's OAuth page
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        Log::info('Request reached to Google Callback');
        try {
            // Get the authenticated Google user
             $googleUser = Socialite::driver('google')
            ->stateless()
            ->user();

            // Log the user's information
            Log::info('Google user information retrieved', ['user' => $googleUser]);

            // Check if the email is verified
            if (!$googleUser->user['email_verified']) {
                Log::warning('Unverified email: ' . $googleUser->email);
                return redirect('https://mnivesh.investwell.app/app/#/kycOnBoarding/mobileSignUp')->with('error', 'Email not verified. Please verify your email with Google.');
            }


            // Cross-reference email with MongoDB
            $existingUser = DB::connection('milestone_db')
                ->collection('MintDb')
                ->where('EMAIL', $googleUser->email)
                ->whereRaw([
                    '$expr' => [
                        '$eq' => ['$NAME', '$FAMILY HEAD'],
                    ],
                ])
                ->first();

            // fallback to the first with that email
            if ( ! $existingUser) {
                $existingUser = DB::connection('milestone_db')
                    ->collection('MintDb')
                    ->where('EMAIL', $googleUser->email)
                    ->first();
            }
            $investwell = new InvestwellController();
            // Step 3: Get the token from `getInvestwellToken` function
            $token = $investwell->getInvestwellToken();

            if (!$token) {
                throw new \Exception('Failed to retrieve Investwell authorization token.');
            }

            // Step 4: Use the above token to get SSOToken from `getSSOToken` function
            $ssoToken = $investwell->getSSOToken($token, $existingUser["USERNAME"]);

            if (!$ssoToken) {
                throw new \Exception('Failed to retrieve SSOToken.');
            }

            // Step 5: Append the SSOToken to the URL and redirect
            $redirectUrl = "https://mnivesh.investwell.app/#/login?SSOToken={$ssoToken}";
            return redirect($redirectUrl);
        } catch (\Exception $e) {
            Log::error('Google Callback Error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return redirect('https://mnivesh.investwell.app/app/#/kycOnBoarding/mobileSignUp')->with('error', 'Authentication failed.');
        }
    }
}
