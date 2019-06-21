@extends('layouts.app')

@section('content')



            <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>First Name</td>
          <td>Last Name</td>
          <td>Blood_Pressure</td>
          <td>Respiratory Rate</td>
          <td>Temperature</td>
          <td>HeartRate</td>
          <td>Disability</td>
          <td>SugarLevel</td>
          <td>Weight</td>

        </tr>
    </thead>
    <tbody>

        
       @foreach($diagnosis as $diagnosis)

        

        

        
        <tr>
        <td>{{$diagnosis->f_name}}</td>
          <td>{{$diagnosis->l_name}}</td>
          <td>{{$diagnosis->history}}</td>
          <td>{{$diagnosis->exam}}</td>
          <td>{{$diagnosis->diagnosis}}</td>


        @endforeach

</tr>

        




    </tbody>
  </table>
<div>
</div>
@endsection