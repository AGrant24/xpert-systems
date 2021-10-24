<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;

class ClientController extends Controller
{
    // display all clients

    // add new client
    public function AddClient(Request $request)
    {
        /** Validate the request */

        $validated = $request->validate([
            'client_name' => 'required|max:100',
            'date_of_birth' => 'nullable|date',
            'address' => 'nullable|max:100',
            'post_code' => 'nullable|max:50',
            'email' => 'nullable|email:rfc,dns|max:70',
            'contact_number' => 'nullable|numeric|max:30',
            'status' => 'nullable',
            'risk_status' => 'nullable',
            'service' => 'nullable',
            'invoiced' => 'nullable',
        ]);

        /** Validated now proceed */

        Client::insert([
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now(),
            'client_name' => $request->client_name,
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
            'post_code' => $request->post_code,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'status' => $request->status,
            'risk_status' => $request->risk_status,
            'service' => $request->service,
            'invoiced' => $request->invoiced,
        ]);

        /** Return to dashboard */
        return redirect()->back()->with('success', 'Client added Successfully');
    }
}
