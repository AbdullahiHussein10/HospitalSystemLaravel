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
</form>
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





            <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>First Name</td>
          <td>Last Name</td>
          <td>Blood_Pressure</td>
          <td>Respiratory Rate</td>
          <td>Temperature</td>
          <td>HeartRate</td>
          <td>Disability</td>
          <td>SugarLevel</td>
          <td>Weight</td>
          <td>Tasks</td>

        </tr>
    </thead>
    <tbody>

        @if(isset($details))
       @foreach($details as $nursecheckups)

        

        

        
        <tr>
        <td>{{$nursecheckups->f_name}}</td>
          <td>{{$nursecheckups->l_name}}</td>
          <td>{{$nursecheckups->bloodpressure}}</td>
          <td>{{$nursecheckups->respiratoryrate}}</td>
          <td>{{$nursecheckups->temperature}}</td>
          <td>{{$nursecheckups->heartrate}}</td>
          <td>{{$nursecheckups->disability}}</td>
          <td>{{$nursecheckups->sugarlevel}}</td>
          <td>{{$nursecheckups->weight}}</td>
          <td><a href="{{url('/doc.creatediagnosis')}}" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span>Add Diagnosis</a></td>



                        </div>
                        
                        <div class="container">
                      
            
            @endforeach
    @endif

                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection