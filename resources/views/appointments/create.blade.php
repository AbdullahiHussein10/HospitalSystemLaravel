@extends('layouts.app')

@section('content')

<div class="sidebar">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card-body bg-dark">
                <div class="card-header text-primary"><span class="glyphicon glyphicon-dashboard"></span>DASHBOARD</div>

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
                <a href="/add_departments">Add Department</a>
                </div>

                <div class="card-body">
                <a href="/view_departments">View Departments</a>
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

                        <label for="doctors_id">Doctors ID :</label>
                        <select>
                        <option>Select Doctor</option>
                        @foreach ($arrayname as $data)                                       
<option value="{{ $data->id }}"  >{{ $data->first_name }}</option>                                                      
 @endforeach
</select>


                        <div class="form-group">
                        <label for="appointment_date">Appointment Date :</label>
                        <input type="date" name="appointment_date"><br>
                        
                        <div class="form-group">
                        <label for="appointment_time">Appointment Time :</label>
                        <input type="string" name="appointment_time"><br>

                        <div class="form-group">
                        <label for="appointment_duration">Appointment Duration :</label>
                        <input type="string" name="appointment_duration"><br>

                        <div class="form-group">
                        <label for="appointment_charges">Appointment Charges :</label>
                        <input type="string" name="appointment_charges"><br>



                        </div><hr>

                        
                        <p><b>Patient Details</b></p>
                        <div class="form-group">
                        <label for="first_name">First Name</label>
                        <select>
                        <option>Select Patient</option>
                        @foreach ($arrayname2 as $data)
                        <option value="{{ $data->id }}" >{{$data->first_name}}</option>
                        @endforeach
                        </select>

                        <div class="form-group">
                        <label for="last_name">Last Name :</label>
                        <input type="string" name="last_name"><br>


                        <div class="form-group">
                        <label for="address">Address :</label>
                        <input type="string" name="address"><br>

                        <button type="submit" class="btn btn-primary">Add Patient</button>

                        </form>

                        </div>

                        </div>
                        
                        @endsection