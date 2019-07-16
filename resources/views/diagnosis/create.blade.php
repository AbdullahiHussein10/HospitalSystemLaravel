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

            
            <form method="post" action="{{action('DiagnosisController@store')}}">
          @csrf


       
          <div class="form-group">
          <label for="patients_id">Patients ID</label>
          <input type="integer" id="patients_id" name="patients_id" value={{$patients_id->id}} >
          </div>
          <div class="form-group">
          <label for="history">Patients History</label><br>
          <textarea class="form-control" rows="5" id="history" name="history"></textarea>
          </div>

          <div class="form-group">
          <label for="">Physical Exam</label><br>
          <textarea class="form-control" rows="5" id="exam" name="exam"></textarea>
          </div>

          <div class="form-group">
          <label for="diagnosis">Diagnosis</label><br>
          <textarea class="form-control" rows="5" id="diagnosis" name="diagnosis"></textarea>
          </div>

          <div class="form-group">
          <label for="gender">Gender :</label>
                        <select name="task" value=" ">
                        <option>Tasks</option>
                        <option value="Send to Admission">Send to Admission</option>
                        <option value="Send to Pharmacy">Send to Pharmacy</option>
                        </select>

                        </div>

          <button type="submit" class="btn btn-primary">Save</button>
          <a href="/diagnosis/view">View Patient Examination</a>
          
                 
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
