<?php

namespace App\Http\Controllers;

use App\Pharmacy;
use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pharmacys = Pharmacy::all();
        return view('pharmacy.view', compact('pharmacy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pharmacy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pharmacys = new Pharmacy();

        $pharmacys->first_name = $request->input('first_name');
        $pharmacys->middle_name = $request->input('middle_name');
        $pharmacys->last_name = $request->input('last_name');
        $pharmacys->age = $request->input('age');
        $pharmacys->gender = $request->input('gender');
        $pharmacys->address = $request->input('address');
        $pharmacys->phone_number = $request->input('phone_number');
        $pharmacys->email = $request->input('email');

        $pharmacys->save();

        return view('pharmacy.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function show(Pharmacy $pharmacy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function edit(Pharmacy $pharmacy)
    {
        $pharmacys = Pharmacy::find($id);
        $pharmacys->update();
        return view('pharmacy.edit', compact('pharmacy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pharmacy $pharmacy)
    {
                
        $pharmacys = Pharmacy::find($id);

       
        
        $pharmacys->first_name =  $request->first_name;
        $pharmacys->last_name = $request->last_name;
        $pharmacys->middle_name = $request->middle_name;
        $pharmacys->age = $request->age;
        $pharmacys->gender = $request->gender;
        $pharmacys->address = $request->address;
        $pharmacys->phone_number = $request->phone_number;
        $pharmacys->email = $request->email;
        
        $pharmacys->save();

        return redirect('/pharmacy')->with('success', 'pharmacys updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pharmacy $pharmacy)
    {
        $pharmacys = Pharmacy::find($id);
        $pharmacys->delete();

        return redirect('pharmacy')->with('success', 'pharmacy Record deleted successfully');
    }
}
