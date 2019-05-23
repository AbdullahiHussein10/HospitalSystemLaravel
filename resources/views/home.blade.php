@extends('layouts.app')

@section('content')

<div class="sidebar">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card bg-dark">
                <div class="card-header text-info">DASHBOARD</div>

                <div class="card-body">
                <a href="/patients_menu">Patient Dashboard</a>
                </div>

                <div class="card-body">
                <a href="/doctors_menu">Doctors Dashboard</a>
                </div>

                <div class="card-body">
                <a href="/nurses_menu">Nurses Dashboard</a>
                </div>

                <div class="card-body">
                <a href="/rooms_menu">Hospital Room Dashboard</a>
                </div>

                <div class="card-body">
                <a href="/appointments_menu">Appointments Dashboard</a>
                </div>

                <div class="card-body">
                <a href="/discharge_patients">Discharge Patient</a>
                </div>

                <div class="card-body">
                <a href="/pharmacy_menu">Pharmacy Details</a>
                </div>

                <div class="card-body">
                <a href="/transactions_menu">Payments Details</a>
                </div>

                <div class="card-body">
                <a href="/contact_us">Contact Us</a>
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
