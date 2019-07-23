@extends('layouts.app')

@section('content')

<div class="sidebar">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card-body bg-dark">
                <a href="/home" class="card-header text-primary"><span class="glyphicon glyphicon-dashboard"></span>DASHBOARD</a>

                <div class="card-body">
                <a href="/add_drugs">Add Drugs</a>
                </div>

                <div class="card-body">
                <a href="/View_drugs">View Drugs</a>
                </div>

                <div class="card-body">
                <a href="/assign_drugs">Assign Drugs</a>
                </div>
                </div>
                </div>



        <div class="col-md-9">
            <div class="card">
                <div class="card-header"></div>

              

            <p>Search Patient to pharmacy :</p>
            <form action="/search5" method="GET" role="search5">
    {{ csrf_field() }}
    
            <button type="submit" class="btn btn-info">List Patients to Assign Medicine
                
            </button>
            
           </form>
    

            
            <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>First Name</td>
          <td>Last Name</td>
          <td>Gender</td>
          <td>Age</td>
          <td>Task</td>


        </tr>
    </thead>
    <tbody>
   
   
        @if(isset($details))
       @foreach($details as $patientspharmacy)
  

  
        <tr>
          <td>{{$patientspharmacy->id}}</td>
          <td>{{$patientspharmacy->f_name}}</td>
          <td>{{$patientspharmacy->l_name}}</td>
          <td>{{$patientspharmacy->gender}}</td>
          <td>{{$patientspharmacy->age}}</td>
          <td>
        
          <a href="{{url('/patients/pharmacy1' , $patientspharmacy->patients_id)}}" class="btn btn-primary">Assign Medicine</a>
          
          </td>
       
            @endforeach
        @endif 
       
</tr>      

</tbody>
  </table>

@endsection