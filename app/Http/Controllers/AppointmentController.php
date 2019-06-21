<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::all();
        return view('appointments.view', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('appointments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appointments = new Appointment();
        $appointments->doctors_id = $request->input('doctors_id');
        $appointments->appointment_date = $request->input('appointment_date');
        $appointments->appointment_time = $request->input('appointment_time'); 
        $appointments->appointment_duration = $request->input('appointment_duration');
        $appointments->appointment_charges = $request->input('appointment_charges');
        $appointments->first_name = $request->input('first_name');
        $appointments->last_name = $request->input('last_name');
        $appointments->address = $request->input('address');


        $appointments->save();

        return view('appointments.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        return view('appointments.view', compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        $appointments = appointment::find($id);
        $appointments->update();
        return view('appointments.edit', compact('appointments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
                
        $appointments = appointment::find($id);

        $appointments = new appointment;
        $appointments->doctors_id =  $request->doctors_id;
        $appointments->appointment_date = $request->appointment_date;
        $appointments->appointment_time = $request->appointment_time;
        $appointments->appointment_duration = $request->appointment_duration;
        $appointments->appointment_charges = $request->appointment_charges;
        $appointments->first_name = $request->first_name;
        $appointments->last_name = $request->last_name;
        $appointments->address = $request->address;
        $appointments->save();

        return redirect('/appointments')->with('success', 'appointments updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointments = appointment::find($id);
        $appointments->delete();

        return redirect('appointments')->with('success', 'appointment Record deleted successfully');
    }

}
