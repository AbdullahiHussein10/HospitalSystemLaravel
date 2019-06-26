@extends('layouts.app')

@section('content')

<div class="sidebar">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card bg-light">
                <div class="card-header text-info">DASHBOARD</div>

            <p>Welcome To The Doctor's Dashboard</p>
            <p>Search Patient Checkup :</p>
            <form action="/search2" method="GET" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="search2" class="form-control" name="search2"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">Search
                
            </button>
        </span>
        
    </div>
    <div>
            <a href="/doc/appointments" class="btn btn-primary">Appointment Module</a>
            </div>


            </div>
            </div>
            <div class="col-md-10">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1><b>Doctors Dashboard!</b></h1>
                    

                    <div class="card-group">
                      <div class="card">
                         <div class="card-body">
                            <p>Patient Basic Info</p><hr>
                            

        <div class="row">
            <div class="col-sm-9">



            <form method="post" action="{{ action('DoctorController@store') }}">

                        
@csrf

<div class="form-group">
<label for="id">ID :</label>
<input type="text" name="id">

<div class="form-group">
<label for="email">E-mail :</label>
<input type="text" name="email">

<div class="form-group">
<button type="submit" class="btn btn-primary">View Appointments</button>

</form>


                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
            