<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Pharmacy;
use App\Medicine;
use DB;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pharmacy::all();
        return view('pharmacist.assign2', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Patient $patients_id)
    {
        return view('pharmacist.assign2', compact('patients_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Patient $patients_id)
    {
        $medicines = new medicine();


        $medicines->patients_id = $request->patients_id;
        $medicines->medicine_name = $request->input('medicine_name');
        $medicines->medicine_category = $request->input('medicine_category');
        $medicines->medicine_quantity = $request->input('medicine_quantity');
        $medicines->medicine_price = $request->input('medicine_price');

    
        $medicines->save();
        

        return view('pharmacist.assign2', compact('patients_id'));
    }
    public function dynamicform1()
    {
        $pharmacys = Pharmacy::pluck('name', 'id');
        return view('pharmacist.assign2', compact('pharmacys'));
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search6(Request $request)
    {
        $search6 = $request->get('search6');

        

        $assigneddrugs = DB::table('medicines')

        
        
        ->join('patients', 'medicines.patients_id', '=', 'patients.id')
        ->select('medicines.id','patients_id', 'patients.first_name as f_name', 'patients.last_name as l_name', 'medicines.medicine_name', 'medicines.medicine_category', 'medicines.medicine_price', 'medicines.medicine_quantity')
        ->where('patients.id', '=', $search6)
        
        ->get();
        
        
        
        

       
            return view ('pharmacist.view_assigned_drugs')->withDetails ($assigneddrugs)->withQuery ($search6);

    }
}
