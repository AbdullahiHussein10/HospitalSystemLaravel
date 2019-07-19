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

                    <h1>        Doctors Details</h1>
                    
                        
                        <form method="post" action="{{ action('DoctorController@store') }}">

                        
                        @csrf

                        <div class="form-group">
                        <label for="first_name">First Name :</label>
                        <input type="text" name="first_name" placeholder="First Name", required>

                        <label for="middle_name">Middle Name :</label>
                        <input type="text" name="middle_name" placeholder="Middle Name", required>

                        <label for="last_name">Last Name :</label>
                        <input type="text" name="last_name" placeholder="Last Name", required>

                        </div>


                        <div class="form-group">
                        <label for="age">Age :</label><br>
                        <input type="string" name="age" placeholder="Age", required>


                        </div>

                        <div class="dropdown">
                            <label for="specialty">Specialty</label>
                            <select name="specialty">
                            <option>Select Specialty</option>
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
                        <input type="string" name="phone_number" placeholder="Phone Number", required>


                        <div class="form-group">
                        <label for="email">E-mail :</label><br>
                        <input type="string" name="email" placeholder="E-mail", required>

                        <button type="submit" class="btn btn-primary">Add Doctor</button>

                        </form>

        </div>
    </div>
</div>
@endsection
