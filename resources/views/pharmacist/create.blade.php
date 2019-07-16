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

                    <h1>        Patients Details</h1>
                    
                        
                        <form method="post" action="{{ action('PatientController@store') }}">

                        
                        @csrf
                        

                        <div class="form-group">
                        <label for="medicine_name">Medicine Name :</label>
                        <input type="text" name="medicine_name" placeholder="Medicine Name">

                        </div>

                        <div class="form-group">
                        <label for="medicine_category">Medicine  Category :</label><br>
                        <input type="string" name="medicine_category" placeholder="Medicine category">

                        <div class="form-group">
                        <label for="medicine_price">Medicine Price :</label><br>
                        <input type="string" name="medicine_price" placeholder="Medicine price">

                        <div class="form-group">
                        <label for="medicine_quantity">Medicine Quantity :</label><br>
                        <input type="string" name="medicine_quantity" placeholder="Medicine Quantity">

                        <button type="submit" class="btn btn-primary">Add Medicine</button>

                        </form>

        </div>
    </div>
</div>
@endsection
