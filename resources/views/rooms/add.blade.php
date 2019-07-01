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

                    <h1>        Patients Details</h1>
                    
                        
                        <form method="post" action="{{ action('RoomController@store') }}">

                        
                        @csrf

                        <div class="form-group">
                        <label for="room_type">Room :</label><br>
                        <select name="room_type" value=" ">
                        <option>Select Room Type</option>
                        <option value="Ward">Ward</option>
                        <option value="Ordinary">Ordinary</option>
                        <option value="Vip room">VIP Room</option>
                        </select>
                        </div>

                        <div class="form-group">
                        <label for="room_number">Room Number :</label>
                        <input type="integer" name="room_number">

                        <div class="form-group">
                        <label for="room_amount">Amount :</label>
                        <input type="integer" name="room_amount">


                        <button type="submit" class="btn btn-primary">Add Room</button>

                        </form>

        </div>
    </div>
</div>
@endsection
