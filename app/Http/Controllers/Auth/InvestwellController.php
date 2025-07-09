<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class InvestwellController extends Controller
{
    public function loginInvestwell()
    {
        try {
            // Step 1: Get the mobile number from the request
            $mobile = request('mobile');

            if (!$mobile) {
                throw new \Exception('Mobile number is required.');
            }

            // Step 2: Get the username from the `getUsername` function
            $username = $this->getUsername($mobile);

            if (!$username) {
                throw new \Exception('User not found for the provided mobile number.');
            }

            // Step 3: Get the token from `getInvestwellToken` function
            $token = $this->getInvestwellToken();

            if (!$token) {
                throw new \Exception('Failed to retrieve Investwell authorization token.');
            }

            // Step 4: Use the above token to get SSOToken from `getSSOToken` function
            $ssoToken = $this->getSSOToken($token, $username);

            if (!$ssoToken) {
                throw new \Exception('Failed to retrieve SSOToken.');
            }

            // Step 5: Append the SSOToken to the URL and redirect
            $redirectUrl = "https://mnivesh.investwell.app/#/login?SSOToken={$ssoToken}";
            return response()->json(['url' => $redirectUrl], 200);
        } catch (\Exception $e) {
            Log::error('Error in loginInvestwell:', ['message' => $e->getMessage()]);
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }


    function getInvestwellToken()
    {
        try {
            $url = config('investwell.api_url') . '/auth/getAuthorizationToken';

            $payload = [
                'authName' => config('investwell.auth_name'),
                'password' => config('investwell.auth_password'),
            ];

            // Make the POST request
            $response = Http::post($url, $payload);

            // Parse the JSON response
            $data = $response->json();

            // Retrieve the token
            $token = $data['result']['token'] ?? null;

            return $token;
        } catch (\Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    function getSSOToken($token, $username)
    {
        try {
            $url = config('investwell.api_url') . '/auth/getAuthenticationKey';

            $payload = [
                'token' => $token,
                'username' => $username,
            ];

            // Make the POST request
            $response = Http::post($url, $payload);

            // Parse the JSON response
            $data = $response->json();

            // Retrieve the token
            $ssoToken = $data['result']['SSOToken'] ?? null;

            if ($ssoToken) {
                return $ssoToken;
            }
        } catch (\Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getUsername(string $mobile): ?string
    {
        // strip leading '+'
        if (str_starts_with($mobile, '+')) {
            $mobile = ltrim($mobile, '+');
        }

        // exceptional block
        if ($mobile === "919996006952") {
            throw new \Exception("User not allowed");
        }

        // decide which field to query
        $field = filter_var($mobile, FILTER_VALIDATE_EMAIL) ? 'EMAIL' : 'MOBILE';

        // pull *all* matching docs
        $users = DB::connection('milestone_db')
            ->collection('MintDb')
            ->where($field, $mobile)
            ->get();

        // none found?
        if ($users->isEmpty()) {
            throw new \Exception('User not found');
        }

        // if more than one, try to find head-of-family (NAME == FAMILY HEAD)
        $target = null;
        if ($users->count() > 1) {
            $target = $users->first(function($u) {
                return isset($u['NAME'], $u['FAMILY HEAD'])
                    && $u['NAME'] === $u['FAMILY HEAD'];
            });
        }

        // fallback to the very first record
        $target = $target ?: $users->first();

        // return its USERNAME (or null)
        return $target['USERNAME'] ?? null;
    }
}
