
@extends('layouts.app')

@section('content')

<div class="sidebar">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card bg-dark">
                <div class="card-header text-info">DASHBOARD</div>

                <div class="card-body">
                <a href="/add_doctors">Add A doctor</a>
                </div>


                <div class="card-body">
                <a href="/view_doctor">View a doctor</a>
                </div>

                <div class="card-body">
                <a href="/View_all_doctors">View All doctors</a>
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

                    <h1>        doctors Details</h1>
                    
                        
                        <form method="post" action="{{ action('DoctorController@update', 'doctors->id') }}">

                        
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                        <label for="id">doctors ID :</label>
                        <input type="integer" name="id" value={{ $doctors->id}} />


                        <div class="form-group">
                        <label for="first_name">First Name :</label>
                        <input type="text" name="first_name" value={{ $doctors->first_name}} />

                        <label for="middle_name">Middle Name :</label>
                        <input type="text" name="middle_name" value={{ $doctors->middle_name}} />

                        <label for="last_name">Last Name :</label>
                        <input type="text" name="last_name" value={{ $doctors->last_name}} />

                      

                        <div class="form-group">
                        <label for="age">Age :</label><br>
                        <input type="string" name="age" value={{ $doctors->age}} />

                        <div class="form-group">
                        <label for="specialty">Specialty :</label><br>
                        <input type="string" name="specialty" value={{ $doctors->specialty}} />


                        <div class="form-group">
                        <label for="phone_number">Phone Number :</label><br>
                        <input type="string" name="phone_number" value={{ $doctors->phone_number}} />

                        <button type="submit" class="btn btn-primary">Add doctor</button>

                        </form>

        </div>
    </div>
</div>
@endsection
