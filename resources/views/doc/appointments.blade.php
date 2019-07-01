@extends('layouts.app')

@section('content')


  
            <div class="row">
            <div class="content-justify-center">
            <div class="col-md-9">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1><b>Doctors Dashboard!</b></h1>

            
            <p>Enter your Doctor ID :</p>
            <form action="/search3" method="GET" role="search3">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="search3" class="form-control" name="search3"
            placeholder="Enter ID"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">Check Appointments
                
            </button>
        </span>
        </form>


                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
            