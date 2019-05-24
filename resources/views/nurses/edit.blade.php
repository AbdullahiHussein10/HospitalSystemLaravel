
@extends('layouts.app')

@section('content')

<div class="sidebar">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card bg-dark">
                <div class="card-header text-info">DASHBOARD</div>

                <div class="card-body">
                <a href="/add_nurses">Add A doctor</a>
                </div>


                <div class="card-body">
                <a href="/View_all_nurses">View All nurses</a>
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

                    <h1>        nurses Details</h1>
                    
                        
                        <form method="post" action="{{ action('NurseController@update', 'nurses->id') }}">

                        
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                        <label for="id">nurses ID :</label>
                        <input type="integer" name="id" value={{ $nurses->id}} />


                        <div class="form-group">
                        <label for="first_name">First Name :</label>
                        <input type="text" name="first_name" value={{ $nurses->first_name}} />

                        <label for="middle_name">Middle Name :</label>
                        <input type="text" name="middle_name" value={{ $nurses->middle_name}} />

                        <label for="last_name">Last Name :</label>
                        <input type="text" name="last_name" value={{ $nurses->last_name}} />


                        <div class="form-group">
                        <label for="address">Address :</label><br>
                        <input type="string" name="address" value={{ $nurses->address}} />


                        <div class="form-group">
                        <label for="phone_number">Phone Number :</label><br>
                        <input type="string" name="phone_number" value={{ $nurses->phone_number}} />

                        <button type="submit" class="btn btn-primary">Update Nurse</button>

                        </form>

        </div>
    </div>
</div>
@endsection
