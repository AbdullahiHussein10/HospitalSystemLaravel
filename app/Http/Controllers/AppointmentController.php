<?php

namespace App\Http\Controllers;
use DB;
use App\Patient;
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
        $appointments = Appointment::with(['patient', 'doctor'])->get();
        dd($appointments);
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
        $appointments->appointment_charges = $request->input('appointment_charges');
        $appointments->patients_id = $request->input('patients_id');
        $appointments->description = $request->input('description');


        $appointments->save();

        return view('appointments.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment, Patient $patients, Doctor $doctors)
    {
        $appointments = DB::table('appointments')
        
        ->join('patients', 'appointments.patients_id', '=', 'patients.id')
        ->join('doctors', 'appointments.doctors_id', '=', 'doctors.id')
        ->select('appointments.id','patients_id','doctors_id', 'patients.first_name as f_name', 'patients.middle_name as m_name', 'doctors.first_name as doc_fname', 'doctors.last_name as doc_lname', 'appointment_date', 'appointment_time', 'appointment_charges', 'description')
         
        
        ->get();
       
        

    return view('appointments.view', compact('appointments'));
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
        $appointments->appointment_charges = $request->appointment_charges;
        $appointments->patients_id = $request->patients_id;
        $appointments->description = $request->description;
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

        return redirect('/view_appointments')->with('success', 'appointment Record deleted successfully');
    }

    public function dynamicform()
    {
        $doctors = Doctor::pluck('name', 'id');
        return view('appointments.create', compact('doctors'));
    }

    public function search3(Request $request) 
    {
        $search3 = $request->get('search3');

        

        $docappointments = DB::table('appointments')

        
        
        ->join('doctors', 'appointments.doctors_id', '=', 'doctors.id')
        ->join('patients', 'appointments.patients_id', '=', 'patients.id')
        ->select('appointments.id','doctors_id', 'patients.first_name as f_name', 'patients.last_name as l_name','patients.gender', 'patients.address')
        ->where('doctors_id', '=', $search3)
        
        ->get();
        
        
       

       
            return view ('doc.viewappointments')->withDetails ($docappointments)->withQuery ($search3);
            
    }
}
