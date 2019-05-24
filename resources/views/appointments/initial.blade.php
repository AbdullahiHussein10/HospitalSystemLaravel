
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

    
                    
                    
                        
                        

                        
                        @csrf

                        <div class="form-group">

                        <div class="row">

    <h1 class="display-8">Doctors:</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <div>
    <div class="col-md-3">
    <form action="/search" method="get">
    </div>
        <a href="{{ action('DoctorController@search')}}"class="btn btn-primary">List</td></a>
        </span>

        <div class="row">
            <div class="col-sm-12">

                        @if(isset($details))
    <h2>Doctors</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>FirstName</th>
                <th>Last Name</th>
                <th>Specialty</td>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $doctor)
            <tr>
                <td>{{$doctor->id}}</td>
                <td>{{$doctor->first_name}}</td>
                <td>{{$doctor->last_name}}</td>
                <td>{{$doctor->specialty}}</td>
                <td><a href="{{ route('appointments.create', ['id' => $doctor->id])}}" class="btn btn-primary">Book Appointment</td></a>
        </tr>
            @endforeach
        </tbody>
    </table>
    @endif
                        @endsection