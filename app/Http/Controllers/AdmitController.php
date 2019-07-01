<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Patient;
use App\Diagnosis;

use Illuminate\Http\Request;


class AdmitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function search4(Request $request)
    {
        $search4 = $request->get('search4');

        

        $patientsadmit = DB::table('diagnosis')
        
        ->join('patients', 'diagnosis.patients_id', '=', 'patients.id')
        ->select('diagnosis.id','patients_id', 'patients.first_name as f_name', 'patients.last_name as l_name', 'patients.age', 'patients.gender')
        ->where('diagnosis.task', '=', 'Send to Admission')
        
        ->get();
        
        
        
        

       
            return view ('patients.admit')->withDetails ($patientsadmit)->withQuery ($search4);

}
}
