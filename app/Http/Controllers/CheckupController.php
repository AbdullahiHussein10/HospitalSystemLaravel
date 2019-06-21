<?php

namespace App\Http\Controllers;
use DB;
use App\Checkup;
use App\Patient;

use Illuminate\Http\Request;

class checkupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{

        $checkups = Checkup::with('patient')->get();
        return view('nurse.viewcheckups', compact('checkups'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('checkups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $checkups = new checkup();
        $checkups->patients_id = $request->input('patients_id');
        $checkups->bloodpressure = $request->input('bloodpressure');
        $checkups->respiratoryrate = $request->input('respiratoryrate');
        $checkups->temperature = $request->input('temperature');
        $checkups->heartrate = $request->input('heartrate');
        $checkups->disability = $request->input('disability');
        $checkups->sugarlevel = $request->input('sugarlevel');
        $checkups->weight = $request->input('weight');
        $checkups->height = $request->input('height');

        $checkups->save();

        return view('nurse.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\checkup  $checkup
     * @return \Illuminate\Http\Response
     */
    public function show(checkup $checkup, Patient $patients)
    {

        $checkups = DB::table('checkups')
        
        ->join('patients', 'checkups.patients_id', '=', 'patients.id')
        ->select('checkups.id','patients_id', 'patients.first_name as f_name', 'patients.last_name as l_name', 'checkups.bloodpressure', 'checkups.respiratoryrate', 'checkups.temperature', 'checkups.heartrate', 'checkups.disability', 'checkups.sugarlevel', 'checkups.weight')
         
        
        ->get();

     
        
        
        
        
        

       
        

    return view('nurse.viewcheckups', ['checkup'=>$checkups]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\checkup  $checkup
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $checkups = checkup::find($id);
        $checkups->update();
        return view('checkups.edit', compact('checkups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\checkup  $checkup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $checkups = checkup::find($id);

        $update = [
        'bloodpressure' =>  $request->bloodpressure,
        'respiratoryrate' => $request->respiratoryrate,
        'temperature' => $request->temperature,
        'heartrate' => $request->heartrate,
        'disability' => $request->disability,
        'sugarlevel' => $request->sugarlevel,
        'weight' => $request->weight,
        'height' => $request->height
        ];
        checkup::where('id',$id)->update($update);

        return redirect('/nurse.home')->with('success', 'checkups updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\checkup  $checkup
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $checkups = checkup::find($id);
        $checkups->delete();

        return redirect('nurse.home')->with('success', 'checkup Record deleted successfully');
    }
    public function search2(Request $request)
    {
        $search2 = $request->get('search2');

        

        $nursecheckups = DB::table('checkups')
        
        ->join('patients', 'checkups.patients_id', '=', 'patients.id')
        ->select('checkups.id','patients_id', 'patients.first_name as f_name', 'patients.last_name as l_name', 'checkups.bloodpressure', 'checkups.respiratoryrate', 'checkups.temperature', 'checkups.heartrate', 'checkups.disability', 'checkups.sugarlevel', 'checkups.weight')
        ->where('patients.id', '=', $search2)
        
        ->get();
        
        
        
        

       
            return view ('doc.home')->withDetails ($nursecheckups)->withQuery ($search2);

    }
}