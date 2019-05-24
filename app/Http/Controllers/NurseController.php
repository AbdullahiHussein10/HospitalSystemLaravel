<?php

namespace App\Http\Controllers;

use App\Nurse;
use Illuminate\Http\Request;

class NurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nurses = Nurse::all();
        return view('nurses.view', compact('nurses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nurses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nurses = new nurse();

        $nurses->first_name = $request->input('first_name');
        $nurses->middle_name = $request->input('middle_name');
        $nurses->last_name = $request->input('last_name');
        $nurses->address = $request->input('address');
        $nurses->phone_number = $request->input('phone_number');

        $nurses->save();

        return view('nurses.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function show(nurse $nurse)
    {
        return view('nurses.view', compact('nurse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nurses = nurse::find($id);
        $nurses->update();
        return view('nurses.edit', compact('nurses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nurses = nurse::find($id);

        $nurses = new nurse;
        $nurses->first_name =  $request->first_name;
        $nurses->last_name = $request->last_name;
        $nurses->middle_name = $request->middle_name;
        $nurses->address = $request->address;
        $nurses->phone_number = $request->phone_number;

        $nurses->save();

        return redirect('/nurses')->with('success', 'nurses updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nurses = nurse::find($id);
        $nurses->delete();

        return redirect('nurses')->with('success', 'nurse Record deleted successfully');
    }
}