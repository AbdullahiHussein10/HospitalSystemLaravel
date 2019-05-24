
@extends('layouts.app')

@section('content')

<div class="sidebar">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card bg-dark">
                <div class="card-header text-info">DASHBOARD</div>

                <div class="card-body">
                <a href="/add_appointments">Add A appointment</a>
                </div>


                <div class="card-body">
                <a href="/view_appointment">View appointment Record</a>
                </div>

                <div class="card-body">
                <a href="/View_all_appointments">View All appointments</a>
                </div>

                <div class="card-body">
                <a href="/schedule_appointments">Schedule Appointment</a>
                </div>

                <div class="card-body">
                <a href="/assign-room">Assign Room</a>
                </div>

                <div class="card-body">
                <a href="/checkout">Checkout</a>
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
                        <input type="integer" name="doctors_id" value="{{app('request')->input('id')}}"><br>


                        <label for="appointment_date">Appointment Date :</label>
                        <input type="date" name="appointment_date"><br>

                        <label for="appointment_time">Appointment Time :</label>
                        <input type="string" name="appointment_time"><br>

                        <label for="appointment_duration">Appointment Duration :</label>
                        <input type="string" name="appointment_duration"><br>



                        </div><hr>

                        
                        <p><b>Patient Details</b></p>
                        <div class="form-group">
                        <label for="first_name">First Name :</label>
                        <input type="string" name="first_name"><br>

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