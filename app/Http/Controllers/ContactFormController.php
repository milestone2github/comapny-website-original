<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactSubmission;
use Illuminate\Support\Facades\Http;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string',
            'last_name'  => 'required|string',
            'email'      => 'required|email',
            'phone'      => 'required|string',
            'message'    => 'required|string',
        ]);

        // Save to local DB
        ContactSubmission::create($validated);

        // Combine full name for Zoho "Name" field
        $senderName = $validated['first_name'] . ' ' . $validated['last_name'];
        $waid = $validated['phone'];

        // You can dynamically set RM or keep a fallback owner ID
        $owner = "2969103000000183019"; // Replace with your default Zoho user ID

        // Create zoho_record exactly like your Python example
        $zohoRecord = [
            "data" => [
                [
                    "Name"           => $senderName,
                    "Mobile"         => $waid,
                    "Owner"          => $owner,
                    "Product_Type"   => "Mutual Fund",
                    "Refrencer_Name" => "WA Marketing",
                ]
            ]
        ];

        // Step 1: Get access token from Zoho
        $tokenResponse = Http::asForm()->post('https://accounts.zoho.com/oauth/v2/token', [
            'refresh_token' => env('ZOHO_REFRESH_TOKEN'),
            'client_id'     => env('ZOHO_CLIENT_ID'),
            'client_secret' => env('ZOHO_CLIENT_SECRET'),
            'grant_type'    => 'refresh_token',
        ]);

        $accessToken = $tokenResponse->json('access_token');

        if (!$accessToken) {
            return back()->with('success', 'Failed to authenticate with Zoho.');
        }

        // Step 2: Send record to Zoho CRM
        $response = Http::withHeaders([
            'Authorization' => 'Zoho-oauthtoken ' . $accessToken,
        ])->post('https://www.zohoapis.com/crm/v2/Investment_leads', $zohoRecord);

        if ($response->successful()) {
            return back()->with('success', 'Our Team Contact You shortly!');
        } else {
            return back()->with('success', 'Failed to create Zoho lead: ' . $response->body());
        }
    }
}
