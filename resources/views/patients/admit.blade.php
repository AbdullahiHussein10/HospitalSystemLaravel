@extends('layouts.app')

@section('content')

<div class="sidebar">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card-body bg-dark">
                <div class="card-header text-primary"><span class="glyphicon glyphicon-dashboard"></span>DASHBOARD</div>

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
            </div>
           
    

            
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mymodal">Assign Room</button>
            </td>
           
     
</tr>

        

</tbody>
  </table>

            <div class="container">
            <form method="post" action="{{ action('RoomController@store') }}">

            <div class="modal" id="mymodal">
            <div class="modal-dialog">
            <div class="modal-content">

            <div class="modal-header">
            <h4 class="modal-title">Assign Room</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>


            
            <div class="modal-body">
                <div class="form-group">
                <label for="patients_id">Patients ID</label>
                <input type="integer" name="patients_id" value={{$patientsadmit->id}} />
            </div>

            <div class="form-group">
                <label for="f_name">Patients First Name</label>
                <input type="integer" name="f_name" value={{$patientsadmit->f_name}} />
            </div>

            <div class="form-group">
                <label for="l_name">Patients Last Name</label>
                <input type="integer" name="l_name" value={{$patientsadmit->l_name}} />
            </div>

            <label for="room">Room :</label>
                        <select name="room" value=" ">
                        <option>Select Room Type</option>
                        <option value="Ward">Ward</option>
                        <option value="Ordinary">Ordinary</option>
                        <option value="Vip room">VIP Room</option>
                        </select>
                        <br>

                        <label for="room">Room :</label>
                        <select name="room" value=" ">
                        <option>Select Room Number</option>
                        <option value="vip_one">VIP 1</option>
                        <option value="vip_two">VIP 2</option>
                        <option value="vip_three">VIP 3</option>
                        <option value="vip_four">VIP 4</option>
                        <option value="vip_five">VIP 5</option>
                        <option value="ward_one">WARD 1</option>
                        <option value="ward_two">WARD 2</option>
                        <option value="ward_three">WARD 3</option>
                        <option value="ward_four">WARD 4</option>
                        <option value="ward_five">WARD 5</option>
                        <option value="ward_six">WARD 6</option>
                        <option value="ward_seven">WARD 7</option>
                        <option value="ward_eight">WARD 8</option>
                        <option value="ward_nine">WARD 9</option>
                        <option value="ordinary_one">ORDINARY 1</option>
                        <option value="ordinary_two">ORDINARY 2</option>
                        <option value="ordinary_three">ORDINARY 3</option>
                        <option value="ordinary_four">ORDINARY 4</option>
                        <option value="ordinary_five">ORDINARY 5</option>
                        <option value="Ordinary_six">ORDINARY 6</option>
                        
                        </select>
                        </div>
                        <div class="modal-footer">
                        <div class="justify-content-center">
                        <a href="class"type="button" class="btn btn-primary">Admit</button>
                        </div>
                        
                                   
            @endforeach
        @endif


<div>
</div>
</div>
</div>
</div>
@endsection