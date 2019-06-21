<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Nurse;
use App\Patient;
use App\Appointment;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $doctorCount = Doctor::count();
        $patientCount = Patient::count();
        $nurseCount = Nurse::count();
        $appointmentCount = Appointment::count();
        return view('admin.home', compact('doctorCount', 'patientCount', 'nurseCount', 'appointmentCount'));
    }
    public function admin()

{

return view(‘admin’);

}

}
