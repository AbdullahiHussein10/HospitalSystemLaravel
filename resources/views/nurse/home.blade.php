@extends('layouts.app')

@section('content')

<div class="sidebar">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card bg-light">
                <div class="card-header integer-info">DASHBOARD</div>

            <p>Welcome To The Nurses Dashboard</p>
            <p>Search Patient :</p>
            <form action="/search1" method="GET" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="search1" class="form-control" name="search1"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">Search
                
            </button>
        </span>
        </div>
        <div>
        
                      <a href="/viewcheckups">View Patient Checkup</a>
                        
                        </div>
    
</form>
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

                    <h1><b>Nurses Dashboard!</b></h1>
                    

                    <div class="card-group">
                      <div class="card">
                         <div class="card-body">
                            <p>Patient Basic Info</p><hr>
                            

        <div class="row">
            <div class="col-sm-12">

                        @if(isset($details))
    <h2>Patient :</h2>
            @foreach($details as $patients)
            <form method="post" action="{{ action('CheckupController@store') }}">
            <div class="form-group">

                <label for="patients_id">ID :</label>
                <input type="integer" name="patients_id" value={{$patients->id}}>
                      <label for="first">First Name :</label>
                        <input type="text" name="first_name" value={{$patients->first_name}}>

                        <label for="last_name">Last Name :</label>
                        <input type="text" name="last_name" value={{$patients->last_name}}><br>
                 
                        
                        <div class="container">
                        <div class="row">
                        <div class="col-12">
                        <div class="form-group">
                        <label for="bloodpressure">Blood Pressure(mm|Hg) :</label><br>
                        <input type="integer" placeholder="BloodPressure" name="bloodpressure", required><br>
                        

                    

                        <label for="respiratoryrate">Respiratory Rate(Breaths/min) :</label><br>
                        <input type="integer" placeholder="RespiratoryRate" name="respiratoryrate", required><br>

                        <label for="temperature">Temperature(cels) :</label><br>
                        <input type="integer" placeholder="Temperature" name="temperature", required><br>
                        @csrf
                        <div class="form-group">
                        <label for="heartrate">Heart Rate(beats/min) :</label><br>
                        <input type="integer" placeholder="Heart Rate" name="heartrate", required><br>

                        <div class="form-group">
                        <label for="sugarlevel">Sugar Level(mM) :</label><br>
                        <input type="integer" placeholder="Sugar Level" name="sugarlevel", required><br>

                        <label for="disability">Disability :</label><br>
                        <input type="text" placeholder="Disability" name="disability", required><br>

                        <label for="weight">Weight(kg) :</label><br>
                        <input type="integer" placeholder="weight" name="weight", required><br>

                        </div>

                        <div class="form-group">
                        <label for="height">Height(cm) :</label><br>
                        <input type="string" placeholder="Height" name="height", required><br>

                        
                        <button type="submit" class="btn btn-primary">Add checkup</button>
                        
                
                
            @endforeach
    @endif

                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection