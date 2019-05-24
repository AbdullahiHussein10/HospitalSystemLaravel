
@extends('layouts.app')

@section('content')

<div class="sidebar">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card bg-dark">
                <div class="card-header text-info">DASHBOARD</div>



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

                    <h1><b>Welcome to the Admin DashBoard!</b></h1>
                    


<table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Doctor Id</td>
          <td>Appointment Date</td>
          <td>Appointment Time</td>
          <td>Patient First Name</td>
          <td>Patient Last Name</td>
          <td>Patient Address</td>
          <td>Phone Number</td>

          <td>Tasks</td>
        </tr>
    </thead>
    <tbody>
        @foreach(\App\Appointment::all() as $appointment)
        <tr>
            <td>{{$appointment->id}}</td>
            <td>{{$appointment->doctors_id}}</td>

            <td>{{$appointment->appointment_date}}</td>
            <td> {{$appointment->appointment_time}}</td>
            <td> {{$appointment->appointment_duration}}</td>
            <td>{{$appointment->first_name}}</td>
            <td>{{$appointment->last_name}}</td>
            <td>{{$appointment->address}}</td>
            <td>{{$appointment->phone_number}}</td>

            
            <td>
                <a href="{{ route('appointments.edit',$appointment->id)}}" class="btn btn-primary">Edit</a>
            </td>
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
