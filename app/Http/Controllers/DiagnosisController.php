<?php

namespace App\Http\Controllers;

use App\Diagnosis;
use Illuminate\Http\Request;
use App\Patient;
use DB;

class DiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $diagnosis = Diagnosis::with('patient')->get();
        return view('doc.creatediagnosis', compact('diagnosis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Patient $patients_id)
    {
        return view('diagnosis.create', compact('patients_id'));
  
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Patient $patients_id)
    {
        
        $diagnosis = new Diagnosis();
        $diagnosis->patients_id = $request->input('patients_id');
        $diagnosis->history = $request->input('history');
        $diagnosis->exam = $request->input('exam');
        $diagnosis->diagnosis = $request->input('diagnosis');
        $diagnosis->task = $request->input('task');
      
        
    $diagnosis->save();
           
       return view('diagnosis.create', compact('patients_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function show(Diagnosis $diagnosis, Patient $patients)
    {
        $diagnosis = DB::table('diagnosis')
        
        ->join('patients', 'diagnosis.patients_id', '=', 'patients.id')
        ->select('diagnosis.id','patients_id', 'patients.first_name as f_name', 'patients.last_name as l_name', 'diagnosis.history', 'diagnosis.exam', 'diagnosis.diagnosis', 'diagnosis.task')
         
        
        ->get();

     
        
        
        
        
        

       
        

    return view('diagnosis.view', ['diagnosis'=>$diagnosis]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function edit(Diagnosis $diagnosis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diagnosis $diagnosis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diagnosis $diagnosis)
    {
        //
    }
}
