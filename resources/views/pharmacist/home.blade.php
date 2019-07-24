@extends('layouts.app')

@section('content')

<div class="sidebar">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card-body bg-dark">
                <a  class="card-header text-primary"><span class="glyphicon glyphicon-dashboard"></span>DASHBOARD</a>


                <div class="card-body">
                <a href="/View_drugs">View Drugs</a>
                </div>

                <div class="card-body">
                <a href="/assign_drugs">Assign Drugs</a>
                </div>

                <div class="card-body">
                <a href="/view_assigned_drugs">Check Assigned Drugs</a>
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

                    <h1> Pharmacist Dashboard</h1>
                    
                        
                        <form method="post" action="{{ action('PharmacyController@store') }}">

                        
                        @csrf
                        

                        <div class="form-group">
                        <label for="medicine_name">Medicine Name :</label>
                        <input type="text" name="medicine_name" placeholder="Medicine Name", required>
                        </div>

                        <div>
                        <label for="medicine_category">Medicine Category :</label>
                        <input type="text" name="medicine_category" placeholder="Medicine Category", required>
                        </div>

                        <div>
                        <label for="medicine_price">Medicine Price/Unit Cost :</label>
                        <input type="integer" name="medicine_price" placeholder="Medicine Price", required>
                        </div>

                        <div>
                        <label for="medicine_quantity">Medicine Quantity :</label>
                        <input type="integer" name="medicine_quantity" placeholder="Medicine Quantity", required>

                        </div>

                        <button type="submit" class="btn btn-primary">Add Drug</button>

                        </form>

        </div>
    </div>
</div>
@endsection
