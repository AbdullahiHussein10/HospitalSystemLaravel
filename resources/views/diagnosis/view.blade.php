@extends('layouts.app')

@section('content')



            <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>First Name</td>
          <td>Last Name</td>
          <td>History</td>
          <td>Physical Exam</td>
          <td>Diagnosis</td>
          <td>Task</td>


        </tr>
    </thead>
    <tbody>

        
       @foreach($diagnosis as $diagnosis)

        

        

        
        <tr>
        <td>{{$diagnosis->id}}</td>
        <td>{{$diagnosis->f_name}}</td>
          <td>{{$diagnosis->l_name}}</td>
          <td>{{$diagnosis->history}}</td>
          <td>{{$diagnosis->exam}}</td>
          <td>{{$diagnosis->diagnosis}}</td>
          <td>{{$diagnosis->task}}</td>


        @endforeach

</tr>

        




    </tbody>
  </table>
<div>
</div>
@endsection