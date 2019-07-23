@extends('layouts.app')

@section('content')

<div class="sidebar">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card-body bg-dark">
                <a href="/home" class="card-header text-primary"><span class="glyphicon glyphicon-dashboard"></span>DASHBOARD</a>

                <div class="card-body">
                <a href="/add_drugs">Add Drugs</a>
                </div>

                <div class="card-body">
                <a href="/View_drugs">View Drugs</a>
                </div>

                <div class="card-body">
                <a href="/assign_drugs">Assign Drugs</a>
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

                    <h1>        pharmacys Details</h1>
                    
                        
                        <form method="post" action="{{ action('PharmacyController@update', $pharmacys->id) }}">

                        @method('PATCH') 
            @csrf
                      

                        <div class="form-group">
                        <label for="id">pharmacys ID :</label>
                        <input type="integer" name="id" value={{ $pharmacys->id}} />
                        </div>

                        <div class="form-group">
                        <label for="medicine_name">Medicine Name :</label>
                        <input type="text" name="medicine_name" value={{ $pharmacys->medicine_name}} />
                        </div>

                        <div>
                        <label for="medicine_category">Medocine Category :</label>
                        <input type="text" name="medicine_category" value={{ $pharmacys->medicine_category}} />
                        </div>

                        <div>
                        <label for="medicine_quantity">Last Name :</label>
                        <input type="integer" name="medicine_quantity" value={{ $pharmacys->medicine_quantity}} />
                        </div>

                        <div>
                        <label for="medicine_price">Medicine Price :</label>
                        <input type="integer" name="medicine_price" value={{ $pharmacys->medicine_price}} />

                        </div>

                      
                        <button type="submit" class="btn btn-primary">Update Drug</button>

                        </form>

        </div>
    </div>
</div>
@endsection
