<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Patient;
use DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Patient $patients_id)
    {
        return view('patients.admit1', compact('patients_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Patient $patients_id)
    {
        $rooms = new Room();


        $rooms->patients_id = $request->patients_id;
        $rooms->room_type = $request->input('room_type');
        $rooms->room_number = $request->input('room_number');
        $rooms->amount_balance = $request->input('amount_balance');

    
        $rooms->save();
        

        return view('patients.admit1', compact('patients_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(room $room, Patient $patients)
    {

        $rooms = DB::table('rooms')
        
        ->join('patients', 'rooms.patients_id', '=', 'patients.id')
        ->select('rooms.id','patients_id', 'patients.first_name as f_name', 'patients.last_name as l_name', 'patients.gender', 'patients.age', 'rooms.room_type', 'rooms.room_number', 'rooms.amount_balance')
         
        
        ->get(); 
        

    return view('patients.view_admitted_patients', compact('rooms'));
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
    public function update(Request $request,$id)
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
    public function assign(Request $request, $id, Room $rooms, Patient $patients)
    {

        
        
        $patients = Patient::findorfail($id);

       
        
      
        $rooms->room_type = $request->input('room_type');
        $rooms->room_number = $request->input('room_number');
        $rooms->amount_balance = $request->input('amount_balance');

        
        $patients->save();

        return view('patients.admit1');
    }
}
