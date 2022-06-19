<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Client;

class AppointmentController extends Controller
{

    private $appointment;
    private $client;

    public function __construct(Appointment $appointment, Client $client)
    {
        $this->appointment = $appointment;
        $this->client = $client;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'date' => 'required',
            'time' => 'required',
            'duration' => 'required'
        ]);

        $data = $request->all();
        if ($data) {
            $this->appointment->create($data);
        }

        $request->session()->flash('message', 'Appointment was successfully added');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        $data = $request->all();

        $request->validate([
            'date' => 'required',
            'time' => 'required',
            'duration' => 'required'
        ]);

        if ($appointment) {
            if (!isset($data['invoiced'])) {
                $data['invoiced'] = 0;
            }
            $appointment->update($data);
        }

        $request->session()->flash('message', 'Appointment was successfully updated');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Appointment $appointment)
    {
        $appointment->delete();
        $request->session()->flash('message', 'Appointment was successfully deleted');
        return back();
    }
}
