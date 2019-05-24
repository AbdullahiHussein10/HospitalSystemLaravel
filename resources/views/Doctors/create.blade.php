
@extends('layouts.app')

@section('content')

<div class="sidebar">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card bg-dark">
                <div class="card-header text-info">DASHBOARD</div>

                <div class="card-body">
                <a href="/add_doctors">Add A Doctor</a>
                </div>

                <div class="card-body">
                <a href="/view_doctors">View Doctors Record</a>
                </div>

                <div class="card-body">
                <a href="/View_all_doctors">View All Doctors</a>
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

                    <h1>        Doctors Details</h1>
                    
                        
                        <form method="post" action="{{ action('DoctorController@store') }}">

                        
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



                        <div class="dropdown">
                            <label for="specialty">Specialty</label>
                            <select name="specialty">
                            <option>General Surgery</option>
                            <option>Dermatology</option>
                            <option>Family Medicine</option>
                            <option>Intensive Care</option>
                            <option>Cardiology</option>
                            <option>Physician</option>
                            </select>
                            </div>

                        <div class="form-group">
                        <label for="phone_number">Phone Number :</label><br>
                        <input type="string" name="phone_number">


                        <button type="submit" class="btn btn-primary">Add Doctor</button>

                        </form>

        </div>
    </div>
</div>
@endsection
