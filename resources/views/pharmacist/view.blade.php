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

                    <h1><b>Welcome to the Admin DashBoard!</b></h1>
                    


<table class="table table-striped">
    <thead>
        <tr>
        
          <td>ID</td>
          <td>Medicine Name</td>
          <td>Medicine Category</td>
          <td>Medicine Quantity</td>
          <td>Medicine Price/Unit Cost</td>
  
          <td>Tasks</td>
        </tr>
    </thead>
    <tbody>
        @foreach(\App\Pharmacy::all() as $pharmacy)
        <tr>
            
            <td>{{$pharmacy->id}}</td>
            <td>{{$pharmacy->medicine_name}}</td>
            <td> {{$pharmacy->medicine_category}}</td>
            <td> {{$pharmacy->medicine_quantity}}</td>
            <td>{{$pharmacy->medicine_price}}</td>

                        
            <td>
                <a href="{{ action('PharmacyController@edit',$pharmacy->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ action('PharmacyController@destroy', $pharmacy->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
