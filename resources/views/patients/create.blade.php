
@extends('layouts.app')

@section('content')

<div class="sidebar">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card bg-dark">
                <div class="card-header text-info">DASHBOARD</div>

                <div class="card-body">
                <a href="/add_patients">Add A Patient</a>
                </div>

                <div class="card-body">
                <a href="/View_all_patients">View All Patients</a>
                </div>

                <div class="card-body">
                <a href="/view_appointments">View Appointment</a>
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

                    <h1>        Patients Details</h1>
                    
                        
                        <form method="post" action="{{ action('PatientController@store') }}">

                        
                        @csrf

                        <div class="form-group">
                        <label for="first_name">First Name :</label>
                        <input type="text" name="first_name">

                        <label for="middle_name">Middle Name :</label>
                        <input type="text" name="middle_name">

                        <label for="last_name">Last Name :</label>
                        <input type="text" name="last_name">

                        </div>

                        <div class="form-group">
                        <label for="age">Age :</label><br>
                        <input type="string" name="age">

                        <div class="form-group">
                        <label for="gender">Gender :</label><br>
                        <select name="gender" value=" ">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        </select>


                        <div class="form-group">
                        <label for="address">Address :</label><br>
                        <input type="string" name="address">

                        <div class="form-group">
                        <label for="phone_number">Phone Number :</label><br>
                        <input type="string" name="phone_number">

                        <div class="form-group">
                        <label for="email">E-mail :</label><br>
                        <input type="email" name="email">

                        <button type="submit" class="btn btn-primary">Add Patient</button>

                        </form>

        </div>
    </div>
</div>
@endsection
