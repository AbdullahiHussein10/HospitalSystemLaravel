<?php

namespace App\Http\Controllers;

use DB;
use \App\Doctor;
use \App\Patient;
use \App\Appointment;
use Illuminate\Http\Request;

class Doc_appointmentController extends Controller
{
    public function search3(Request $request) 
    {
        $search3 = $request->get('search3');

        

        $docappointments = DB::table('appointments')

        
        ->join('doctors', 'appointments.doctors_id', '=', 'doctors.id')
        ->join('patients', 'appointments.patients_id', '=', 'patients.id')
        ->select('appointments.id','doctors.id', 'patients.first_name as f_name', 'patients.last_name as l_name','patients.gender', 'patients.address', 'appointments.appointment_time', 'appointments.appointment_date')
        ->where('doctors.id', '=', $search3)
       
        ->get();

        
        
         
        
        

       
            return view ('doc.viewappointments')->withDetails ($docappointments)->withQuery($search3);
    }
}
