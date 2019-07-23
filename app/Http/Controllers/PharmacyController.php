<?php

namespace App\Http\Controllers;

use App\Pharmacy;
use Illuminate\Http\Request;
use DB;

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
        return view('pharmacist.view', compact('pharmacys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pharmacist.home');
    }

    /**
     * Store a newly created resource in stormedicine_quantity.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pharmacys = new Pharmacy();

        $pharmacys->medicine_name = $request->input('medicine_name');
        $pharmacys->medicine_category = $request->input('medicine_category');
        $pharmacys->medicine_price = $request->input('medicine_price');
        $pharmacys->medicine_quantity = $request->input('medicine_quantity');


        $pharmacys->save();

        return view('pharmacist.home');
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
    public function edit($id)
    {
        $pharmacys = Pharmacy::find($id);
        $pharmacys->update();
        return view('pharmacist.edit', compact('pharmacys'));
    }

    /**
     * Update the specified resource in stormedicine_quantity.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                
        $pharmacys = Pharmacy::find($id);

       
        
        $pharmacys->medicine_name =  $request->medicine_name;
        $pharmacys->medicine_price = $request->medicine_price;
        $pharmacys->medicine_category = $request->medicine_category;
        $pharmacys->medicine_quantity = $request->medicine_quantity;

        
        $pharmacys->save();

        return view('pharmacist.view')->with('success', 'pharmacys updated!');
    }

    /**
     * Remove the specified resource from stormedicine_quantity.
     *
     * @param  \App\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pharmacys = Pharmacy::find($id);
        $pharmacys->delete();

        return redirect('pharmacy')->with('success', 'pharmacy Record deleted successfully');
    }

    public function search5(Request $request)
    {
        $search5 = $request->get('search5');

        

        $patientspharmacy = DB::table('diagnosis')
        
        ->join('patients', 'diagnosis.patients_id', '=', 'patients.id')
        ->select('diagnosis.id','patients_id', 'patients.first_name as f_name', 'patients.last_name as l_name', 'patients.age', 'patients.gender')
        ->where('diagnosis.task', '=', 'Send to Pharmacy')
        
        ->get();
        
        
        
        

       
            return view ('pharmacist.assign')->withDetails ($patientspharmacy)->withQuery ($search5);

}
}
