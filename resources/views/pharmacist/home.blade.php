@extends('layouts.app')

@section('content')

<div class="sidebar">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card-body bg-dark">
                <a href="/home" class="card-header text-primary"><span class="glyphicon glyphicon-dashboard"></span>DASHBOARD</a>

                <div class="card-body">
                <a href="/add_drugs">Add Drugs</a>
                </div>

                <div class="card-body">
                <a href="/View_drugs">View Drugs</a>
                </div>

                <div class="card-body">
                <a href="/assign_drugs">Assign Drugs</a>
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

                    <h1> Pharmacist Dashboard</h1>
                    
                        
                        <form method="post" action="{{ action('PatientController@store') }}">

                        
                        @csrf
                        

                        <div class="form-group">
                        <label for="first_name">First Name :</label>
                        <input type="text" name="first_name" placeholder="First Name">

                        <label for="middle_name">Middle Name :</label>
                        <input type="text" name="middle_name" placeholder="Middle Name">

                        <label for="last_name">Last Name :</label>
                        <input type="text" name="last_name" placeholder="Last Name">

                        </div>

                        <div class="form-group">
                        <label for="age">Age :</label><br>
                        <input type="string" name="age" placeholder="Age">


                        
                        <label for="gender">Gender :</label>
                        <select name="gender" value=" ">
                        <option>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        </select>


                        <div class="form-group">
                        <label for="address">Address :</label><br>
                        <input type="string" name="address" placeholder="Address">

                        <div class="form-group">
                        <label for="phone_number">Phone Number :</label><br>
                        <input type="string" name="phone_number" placeholder="Phone Number">

                        <div class="form-group">
                        <label for="email">E-mail :</label><br>
                        <input type="email" name="email" placeholder="E-mail">

                        <button type="submit" class="btn btn-primary">Add Patient</button>

                        </form>

        </div>
    </div>
</div>
@endsection
