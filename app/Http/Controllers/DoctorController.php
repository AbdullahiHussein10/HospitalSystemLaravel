<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('Doctors.view', compact('doctors'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctors = new doctor();

        $doctors->first_name = $request->input('first_name');
        $doctors->middle_name = $request->input('middle_name');
        $doctors->last_name = $request->input('last_name');
        $doctors->age = $request->input('age');
        $doctors->specialty = $request->input('specialty');
        $doctors->email = $request->input('email');
        $doctors->phone_number = $request->input('phone_number');

        $doctors->save();

        return view('Doctors.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        return view('doctors.view', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctors = Doctor::find($id);
        $doctors->update();
        return view('Doctors.edit', compact('doctors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doctors = doctor::find($id);

        
        $doctors->first_name =  $request->first_name;
        $doctors->last_name = $request->last_name;
        $doctors->middle_name = $request->middle_name;
        $doctors->age = $request->age;
        $doctors->specialty = $request->specialty;
        $doctors->phone_number = $request->phone_number;

        $doctors->save();

        return redirect('/doctors')->with('success', 'doctors updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctors = doctor::find($id);
        $doctors->delete();

        return redirect('doctors')->with('success', 'doctor Record deleted successfully');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $doctor = Doctor::where('specialty','like', '%' .$search. '%')->paginate(5);
    
            if (count ( $doctor ) > 0)
                return view ( 'appointments.initial' )->withDetails ( $doctor )->withQuery ( $search );
            else
                return view ( 'patients.create' )->withMessage ( 'No Details found. Try to search again !' );
        
    }
    public function getdoccount($doctorcount)
    {

                    $doctorcount = Doctor::get()->count();
                    echo ($doctorcount);
    }

}
