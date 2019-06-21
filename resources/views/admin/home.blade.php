@extends('layouts.app')

@section('content')

<div class="sidebar">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card bg-dark">
                <div class="card-header text-info">DASHBOARD</div>

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
                            <div class="bg-primary">
                    <p>PATIENTS</p>  
                    <p>TOTAL:  
                            </div>
                                </div>
                                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="bg-secondary">
                    <p>DOCTORS</p>  
                    <p>TOTAL:  
                        </div>
                            </div>

                                </div>

                    


                    <div class="card">
                        <div class="card-body">
                             <div class="bg-success">
                    <p>NURSES</p>  
                    <p>TOTAL: 
                            </div>
                                </div>
                                    </div>
                                        </div>
                                            </div>
                    
                    <div class="col-md-4">
                        <div class="card-group">
                            <div class="card">
                                <div class="card-body">
                                    <div class="bg-primary">
                    <p>ROOMS</p>  
                    <p>TOTAL:  
                                            </div>
                                                </div>


                    
                   
                </div>

                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
