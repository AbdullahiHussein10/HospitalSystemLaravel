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


           
       


  <form method="post" action="{{ action('RoomController@store') }}">
 
     @csrf

           
            <h4>Assign Room</h4>
            
       

            
         
            
                <div class="form-group">
                <label for="patients_id">Patients ID</label>
                <input type="integer" name="patients_id" value={{$patients_id->id}}  >
            </div>

      

            <label for="room_type">Room :</label>
                        <select name="room_type" value=" ">
                    <option>Select Room Type</option>
                        <option value="Ward">Ward</option>
                        <option value="Ordinary">Ordinary</option>
                        <option value="Vip room">VIP Room</option>
                    </select>
                        <br>

                        <label for="room_number">Room :</label>
                        <select name="room_number" value=" ">
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
                        

            <div class="form-group">
                <label for="amount_balance">Room Amount</label>
                <input type="integer" name="amount_balance", required>
            </div>
                       
                        <button type="submit" class="btn btn-primary">Admit</button>
                        </div>
                     
     
                       

<div>
</div>
</form>
</div>

        </div>
</div>
</div>


   
 
@endsection