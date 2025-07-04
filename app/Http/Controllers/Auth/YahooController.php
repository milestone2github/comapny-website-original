<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Auth\InvestwellController;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class YahooController extends Controller
{
    public function redirectToYahoo()
    {
        // Redirect to yahoo's OAuth page
        return Socialite::driver('yahoo')->redirect();
    }

    public function handleYahooCallback()
    {
        Log::info('Request reached to Yahoo Callback');
        try {
            Log::info('Yahoo callback query params', request()->query());

            // Step 1: Exchange code for access token
            $response = Socialite::driver('yahoo')->getAccessTokenResponse(request('code'));
            $accessToken = $response['access_token'] ?? null;

            if (!$accessToken) {
                throw new \Exception('Failed to retrieve access token from Yahoo.');
            }

            // Step 2: Fetch user profile
            $userData = Http::withHeaders([
                'Authorization' => 'Bearer ' . $accessToken,
            ])->get('https://api.login.yahoo.com/openid/v1/userinfo');

            if (!$userData->successful()) {
                throw new \Exception('Failed to fetch user profile from Yahoo.');
            }

            $yahooUser = $userData->json();
            Log::info('Yahoo user info retrieved', ['user' => $yahooUser]);

            // Extract email
            $email = $yahooUser['email'] ?? null;
            if (!$email) {
                throw new \Exception('Email not found in Yahoo response.');
            }

            $existingUser = DB::connection('milestone_db')
                ->collection('MintDb')
                ->where('EMAIL', $email)
                ->first();

            if ($existingUser) {
                Auth::loginUsingId($existingUser['_id']);
            } else {
                // Handle case where the user is not found in MongoDB
                Log::warning('User not found in MongoDB: ' . ($yahooUser['email'] ?? 'no-email'));
                return redirect('https://mnivesh.investwell.app/app/#/kycOnBoarding/mobileSignUp')->with('error', 'User not found.');
            }
            $investwell = new InvestwellController();
            Log::info('Trying Investwell username with mobile', ['mobile' => $existingUser['MOBILE']]);
            $username = $investwell->getUsername($existingUser['MOBILE']);

            if (!$username) {
                throw new \Exception('User not found for the provided mobile number.');
            }

            // Step 3: Get the token from `getInvestwellToken` function
            $token = $investwell->getInvestwellToken();

            if (!$token) {
                throw new \Exception('Failed to retrieve Investwell authorization token.');
            }

            // Step 4: Use the above token to get SSOToken from `getSSOToken` function
            $ssoToken = $investwell->getSSOToken($token, $username);

            if (!$ssoToken) {
                throw new \Exception('Failed to retrieve SSOToken.');
            }

            // Step 5: Append the SSOToken to the URL and redirect
            $redirectUrl = "https://mnivesh.investwell.app/#/login?SSOToken={$ssoToken}";
            return redirect($redirectUrl);
        } catch (\Exception $e) {
            Log::error('Yahoo Socialite Exception', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'query' => request()->query(),
            ]);
            return redirect('https://mnivesh.investwell.app/app/#/kycOnBoarding/mobileSignUp')->with('error', 'Authentication failed.');
        }
    }
}
