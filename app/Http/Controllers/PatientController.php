<?php

namespace App\Http\Controllers;
use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $patients = Patient::all();
        return view('patients.view', compact('patients'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patients = new Patient();

        $patients->first_name = $request->input('first_name');
        $patients->middle_name = $request->input('middle_name');
        $patients->last_name = $request->input('last_name');
        $patients->age = $request->input('age');
        $patients->gender = $request->input('gender');
        $patients->address = $request->input('address');
        $patients->phone_number = $request->input('phone_number');
        $patients->email = $request->input('email');

        $patients->save();

        return view('patients.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('patients.view', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patients = Patient::find($id);
        $patients->update();
        return view('patients.edit', compact('patients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        
        
        $patients = Patient::find($id);

       
        
        $patients->first_name =  $request->first_name;
        $patients->last_name = $request->last_name;
        $patients->middle_name = $request->middle_name;
        $patients->age = $request->age;
        $patients->gender = $request->gender;
        $patients->address = $request->address;
        $patients->phone_number = $request->phone_number;
        $patients->email = $request->email;
        
        $patients->save();

        return redirect('/patients')->with('success', 'patients updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patients = Patient::find($id);
        $patients->delete();

        return redirect('patients')->with('success', 'patient Record deleted successfully');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $patients = Patient::where('','like', '%' .$search. '%')->paginate(5);
    
            if (count ( $room ) > 0)
                return view ( 'rooms.initial' )->withDetails ( $room )->withQuery ( $search );
            else
                return view ( 'patients.create' )->withMessage ( 'No Details found. Try to search again !' );
        
    }
    public function search1(Request $request)
    {
        $search1 = $request->get('search1');
        $patients = Patient::where('id','like', '%' .$search1. '%')->paginate(5);
    
            if (count ( $patients ) > 0)
                return view ( 'nurse.home' )->withDetails ( $patients )->withQuery ( $search1 );
            else
                return view ( 'patients.create' )->withMessage ( 'No Details found. Try to search again !' );
        
    }
}
