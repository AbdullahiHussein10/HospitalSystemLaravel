
@extends('layouts.app')

@section('content')

<div class="sidebar">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card bg-dark">
                <div class="card-header text-info">DASHBOARD</div>

                <div class="card-body">
                <a href="/add_nurses">Add A nurse</a>
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

                    <h1><b>Welcome to the Admin DashBoard!</b></h1>
                    


<table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>First Name</td>
          <td>Middle Name</td>
          <td>last Name</td>
          <td>Address</td>
          <td>Phone Number</td>

          <td>Tasks</td>
        </tr>
    </thead>
    <tbody>
        @foreach(\App\Nurse::all() as $nurse)
        <tr>
            <td>{{$nurse->id}}</td>
            <td>{{$nurse->first_name}}</td>
            <td> {{$nurse->middle_name}}</td>
            <td> {{$nurse->last_name}}</td>
            <td>{{$nurse->address}}</td>
            <td>{{$nurse->phone_number}}</td>

            
            <td>
                <a href="{{ route('nurses.edit',$nurse->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('nurses.destroy', $nurse->id)}}" method="post">
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
