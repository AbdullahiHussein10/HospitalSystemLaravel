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
                <a href="/add_rooms">Add Rooms</a>
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

                    <h1><b>Welcome to the Admin DashBoard!</b></h1>
                    


<table class="table table-striped">
    <thead>
        <tr>
        
          <td>ID</td>
          <td>First Name</td>
          <td>Middle Name</td>
          <td>last Name</td>
          <td>Age</td>
          <td>Gender</td>
          <td>Address</td>
          <td>Phone Number</td>
          <td>Email</td>
          <td>Tasks</td>
        </tr>
    </thead>
    <tbody>
        @foreach(\App\Patient::all() as $patient)
        <tr>
            
            <td>{{$patient->id}}</td>
            <td>{{$patient->first_name}}</td>
            <td> {{$patient->middle_name}}</td>
            <td> {{$patient->last_name}}</td>
            <td>{{$patient->age}}</td>
            <td>{{$patient->gender}}</td>
            <td>{{$patient->address}}</td>
            <td>{{$patient->phone_number}}</td>
            <td>{{$patient->email}}</td>

            
            <td>
                <a href="{{ route('patients.edit',$patient->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('patients.destroy', $patient->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
