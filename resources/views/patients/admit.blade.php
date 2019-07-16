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

              

            <p>Search Patient to Admit :</p>
            <form action="/search4" method="GET" role="search4">
    {{ csrf_field() }}
    
            <button type="submit" class="btn btn-info">List Patients to Admit
                
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
       @foreach($details as $patientsadmit)
  

  
        <tr>
          <td>{{$patientsadmit->id}}</td>
          <td>{{$patientsadmit->f_name}}</td>
          <td>{{$patientsadmit->l_name}}</td>
          <td>{{$patientsadmit->gender}}</td>
          <td>{{$patientsadmit->age}}</td>
          <td>
        
          <a href="{{url('/patients/admit1' , $patientsadmit->patients_id)}}" class="btn btn-primary">Assign Room</a>
          
          </td>
       
            @endforeach
        @endif 
       
</tr>      

</tbody>
  </table>

@endsection