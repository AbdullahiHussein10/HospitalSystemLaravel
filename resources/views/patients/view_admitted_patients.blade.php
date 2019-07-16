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
          <td>First Name</td>
          <td>Last Name</td>
          <td>Gender</td>
          <td>Age</td>
          <td>Room Type</td>
          <td>Room Number</td>
          <td>Room Amount</td>


        </tr>
    </thead>
    <tbody>

        
       @foreach($rooms as $admissionrooms)
  

        
        <tr>
          <td>{{$admissionrooms->id}}</td>
          <td>{{$admissionrooms->f_name}}</td>
          <td>{{$admissionrooms->l_name}}</td>
          <td>{{$admissionrooms->gender}}</td>
          <td>{{$admissionrooms->age}}</td>
          <td>{{$admissionrooms->room_type}}</td>
          <td>{{$admissionrooms->room_number}}</td>
          <td>{{$admissionrooms->amount_balance}}</td>


        @endforeach

</tr>

        




    </tbody>
  </table>
<div>
</div>
@endsection