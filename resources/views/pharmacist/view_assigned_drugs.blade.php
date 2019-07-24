@extends('layouts.app')

@section('content')

<div class="sidebar">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card-body bg-dark">
                <a class="card-header text-primary"><span class="glyphicon glyphicon-dashboard"></span>DASHBOARD</a>



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

                   
            <p>Search Patient :</p>
            <form action="/search6" method="GET" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="search6" class="form-control" name="search6"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">Search
                
            </button>
        </span>
    </div>
</form>
<table class="table table-striped">
    <thead>
        <tr>
          <td>First Name</td>
          <td>Last Name</td>
          <td>Medicine Name</td>
          <td>Medicine Category</td>
          <td>Medicine Price</td>
          <td>Medicine Quantity</td>

        </tr>
    </thead>
    <tbody>

        @if(isset($details))
       @foreach($details as $assigneddrugs)

        

        

        
        <tr>
            <td>{{$assigneddrugs->f_name}}</td>
            <td>{{$assigneddrugs->l_name}}</td>
          <td>{{$assigneddrugs->medicine_name}}</td>
          <td>{{$assigneddrugs->medicine_category}}</td>
          <td>{{$assigneddrugs->medicine_price}}</td>
          <td>{{$assigneddrugs->medicine_quantity}}</td>


                        </div>
                    
            
            @endforeach
    @endif

                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
                        
                        

