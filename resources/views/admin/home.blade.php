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
                <a href="/add_rooms">Add Rooms</a>
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

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1><b>Welcome to the Admin DashBoard!</b></h1>
                    

                    <div class="card-group">
                      <div class="card">
                         <div class="card-body">
                            
                    
                    <img src="/patient.jpg" style="width:50px;height:50px">  
                    <p>TOTAL:  
                    <?php
                    echo $patientCount;
                    ?>
                            
                                </div>
                                    </div>

                    <div class="card">
                        <div class="card-body">
                           
                   
                    <img src="/doc.png" style="width:50px;height:50px">
                    <p>TOTAL:  
                    <?php
                echo $doctorCount;
                ?>
                            </div>

                                </div>

                    


                    <div class="card">
                        <div class="card-body">
                            
                             <img src="/nurse.ico" style="width:50px;height:50px">
                    
                    <p>TOTAL: 
                    <?php
                    echo $nurseCount;
                    ?>
                            
                                </div>
                                    </div>
                                        </div>
                                            </div>
                    
                    <div class="col-md-12">
                        <div class="card-group">
                            <div class="card">
                                <div class="card-body">
                                    
                    <img src="/appointment.jpg" style="width:50px;height:50px">
                    <p>TOTAL:  
                    <?php
                    echo $appointmentCount;
                    ?>
                                            
                                                </div>
                                                </div>
                <div class="card">
                <div class="card-body">
                <img src="department.png" style="width:50px;height:50px">
                <p>TOTAL:
                5
                </div>
                    
                   
                </div>

                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
