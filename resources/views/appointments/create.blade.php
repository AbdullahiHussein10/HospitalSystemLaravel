@extends('layouts.app')

@section('content')

<div class="sidebar">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card-body bg-dark">
                <a href="/home" class="card-header text-primary"><span class="glyphicon glyphicon-dashboard"></span>DASHBOARD</a>

                <div class="card-body">
                <a href="/add_patients">Add Patients</a>
                </div>

                <div class="card-body">
                <a href="/View_all_patients">View Patients</a>
                </div>

                <div class="card-body">
                <a href="/add_doctors">Add Doctors</a>
                </div>

                <div class="card-body">
                <a href="/view_doctors">View Doctors</a>
                </div>

                <div class="card-body">
                <a href="/book_appointments">Book Appointment</a>
                </div>

                <div class="card-body">
                <a href="/view_appointments">View Appointments</a>
                </div>

          

                <div class="card-body">
                <a href="/admit_patients">Admit Patient</a>
                </div>

                <div class="card-body">
                <a href="/admitted_patients">Check Admitted Patients</a>
                </div>

                <div class="card-body">
                <a href="/view_departments">Generate Invoice</a>
                </div>
                    
                </div>
            </div>

            <div class="col-md-9">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>        Schedule Appointment</h1>

                    <p><b>Appointment Details</b></p>

    
                    
                        
                        
                        
                        
                        <form method="post" action="{{ action('AppointmentController@store') }}">

                        
                        @csrf

                        <div class="form-group">

                        <label for="doctors_id">Doctor's Name :</label>
                        <select name="doctors_id">
                        <option>Select Doctor</option>
                        @foreach ($arrayname as $data)                                       
<option value="{{ $data->id }}"  >{{ $data->first_name. "  ".$data->last_name }}</option>                                                      
 @endforeach
</select>


                        <div class="form-group">
                        <label for="appointment_date">Appointment Date :</label>
                        <input type="date" name="appointment_date"><br>
                        
                        <div class="form-group">
                        <label for="appointment_time">Appointment Time :</label>
                        
                        <select name="appointment_time">
                        <option>Choose Appointment Time</option>
                        <option value="08:00 - 10:00">08:00 - 10:00</option>
                        
                        <option value="10:00 - 12:00">10:00 - 12:00</option>
                        <option value="14:00 - 16:00">14:00 - 16:00</option>
                        <option value="16:00 - 18:00">16:00 - 18:00</option>

                        </select>
                        </div>


                        <div class="form-group">
                        <label for="appointment_charges">Appointment Charges :</label>
                        <input type="string" name="appointment_charges"><br>



                        </div><hr>

                        
                        <p><b>Patient Details</b></p>
                        <div class="form-group">
                        <label for="patients_id">Patient's Name</label>
                        <select name="patients_id">
                        <option>Select Patient</option>
                        @foreach ($arrayname2 as $data)
                        <option value="{{ $data->id }}" >{{$data->first_name. " " .$data->last_name}}</option>
                        @endforeach
                        </select>


                        <div class="form-group">
                        <label for="">Description</label><br>
                        <textarea class="form-control" rows="3" id="description" name="description"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>

                        </form>

                        </div>

                        </div>
                        
                        @endsection