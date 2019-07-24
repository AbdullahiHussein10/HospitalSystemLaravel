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

                    <h1>        Patients Details</h1>
                    
                        
                        <form method="post" action="{{ action('MedicineController@store') }}">

                        
                        @csrf
                        
                       
                            <div class="form-group">
                            <label for="patients_id">Patients ID</label>
                            <input type="integer" name="patients_id" value={{$patients_id->id}} >
                        </div>
                        <div class="form-group">
                        <label for="medicine_name">Medicine Name :</label>
                        <input type="text" name="medicine_name" placeholder="Medicine Name", required>

                        </div>

                        <div class="form-group">
                        <label for="medicine_category">Medicine  Category :</label><br>
                        <input type="string" name="medicine_category" placeholder="Medicine category", required>

                        <div class="form-group">
                        <label for="medicine_price">Medicine Price/unit cost :</label><br>
                        <input type="string" name="medicine_price" placeholder="Medicine price", required>

                        <div class="form-group">
                        <label for="medicine_quantity">Medicine Quantity :</label><br>
                        <input type="string" name="medicine_quantity" placeholder="Medicine Quantity", required>

                        <button type="submit" class="btn btn-primary">Assign Medicine</button>

                        </form>

        </div>
    </div>
</div>
@endsection
