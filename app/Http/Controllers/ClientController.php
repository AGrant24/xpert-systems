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
    public function AllClient()
    {
        $clients = Client::latest()->paginate(5);
        return view('client.index', compact('clients'));
    }

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
            'phone' => 'nullable|max:15',
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
            'phone' => $request->phone,
            'status' => 'New',
            'risk_status' => $request->risk_status,
            'service' => $request->service,
            'invoiced' => $request->invoiced,
        ]);
        return redirect()->back()->with('success', 'Client added Successfully');
    }

    // View Client's unique page
    public function ViewClient($id)
    {
        $clients = Client::find($id);
        // $appointments - Appointment::latest();
        // make sure to compact appointments 
        return view('client.view', compact('clients'));
    }

    // go to edit Client's unique page
    public function EditClient($id)
    {
        $clients = Client::find($id);
        // $appointments - Appointment::latest();
        // make sure to compact appointments 
        return view('client.edit', compact('clients'));
    }
    // update clients record
    public function UpdateClient(Request $request, $id)
    {

        $clients = Client::find($id);
        $update = Client::find($id)->update([
            // Update this stuff
            'client_name' => $request->client_name,
            'risk_status' => $request->risk_status,
            'status' => $request->status,
            'date_of_birth' => $request->date_of_birth,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'post_code' => $request->post_code,
        ]);
        return Redirect()->to('client/' . $clients->id)->with('success', 'Client Information Updated!');
    }
}
