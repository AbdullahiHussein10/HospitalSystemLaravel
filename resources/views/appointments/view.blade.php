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

                    <h1><b>Welcome to the Admin DashBoard!</b></h1>
                    


<table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Doctor First Name</td>
          <td>Doctor Last Name</td>
          <td>Patient First Name</td>
          <td>Patient Last Name</td>
          <td>Appointment Date</td>
          <td>Appointment Time</td>
          <td>Appointment Charges</td>
          <td>Description</td>

          <td>Tasks</td>
        </tr>
    </thead>
    <tbody>

        @foreach($appointments as $appointment)
        <tr>
            <td>{{$appointment->id}}</td>
            <td>{{$appointment->doc_fname}}</td>
            <td>{{$appointment->doc_lname}}</td>
            <td>{{$appointment->f_name}}</td>
            <td>{{$appointment->m_name}}</td>
            <td>{{$appointment->appointment_date}}</td>
            <td>{{$appointment->appointment_time}}</td>
            <td>{{$appointment->appointment_charges}}</td>
            <td>{{$appointment->description}}</td>
           

            <td>
                <form action="{{ route('appointments.destroy', $appointment->id)}}" method="post">
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
