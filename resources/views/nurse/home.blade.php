@extends('layouts.app')

@section('content')

<div class="sidebar">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card bg-light">
                <div class="card-header text-info">DASHBOARD</div>

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

                <label for="id">ID :</label>
                <input type="integer" name="patients_id" value={{$patients->id}}>
                      <label for="first">First Name :</label>
                        <input type="text" name="first_name" value={{$patients->first_name}}>

                        <label for="last_name">Last Name :</label>
                        <input type="text" name="last_name" value={{$patients->last_name}}><br>
                        </div>
                        
                        <div class="container">
                        <div class="row">
                        <div class="col-12">
                        <div class="form-group">
                        <label for="bloodpressure">Blood Pressure(mm|Hg) :</label><br>
                        <input type="text" placeholder="BloodPressure" name="bloodpressure">
                        

                    

                        <label for="respiratoryrate">Respiratory Rate(Breaths/min) :</label><br>
                        <input type="text" name="respiratoryrate">

                        <label for="temperature">Temperature(cels) :</label><br>
                        <input type="text" name="temperature">
                        @csrf
                        <div class="form-group">
                        <label for="heartrate">Heart Rate(beats/min) :</label>
                        <input type="text" name="heartrate">

                        <div class="form-group">
                        <label for="sugarlevel">Sugar Level(mM) :</label>
                        <input type="text" name="sugarlevel">

                        <label for="disability">Disability :</label>
                        <input type="text" name="disability">

                        <label for="weight">Weight(kg) :</label>
                        <input type="text" name="weight">

                        </div>

                        <div class="form-group">
                        <label for="height">Height(cm) :</label><br>
                        <input type="string" name="height">

                        
                        <button type="submit" class="btn btn-primary">Add checkup</button>
                        <div>
                        <a href="/viewcheckups">View Patient Checkup</a>
                        
                        </div>
                
                
            @endforeach
    @endif

                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection