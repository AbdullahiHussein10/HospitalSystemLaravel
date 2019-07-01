@extends('layouts.app')

@section('content')



            <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>First Name</td>
          <td>Last Name</td>
          <td>Gender</td>
          <td>Address</td>
          <td>Time</td>
          <td>Date</td>

        </tr>
    </thead>
    <tbody>

   
       @foreach($details as $docappointments)
  

        
        <tr>
          <td>{{$docappointments->id}}</td>
          <td>{{$docappointments->f_name}}</td>
          <td>{{$docappointments->l_name}}</td>
          <td>{{$docappointments->gender}}</td>
          <td>{{$docappointments->address}}</td>
          <td>{{$docappointments->appointment_time}}</td>
          <td>{{$docappointments->appointment_date}}</td>
          


        @endforeach
        
</tr>

        




    </tbody>
  </table>
<div>
</div>
@endsection