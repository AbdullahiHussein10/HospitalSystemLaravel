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

        
       @foreach($checkups as $nursecheckups)
  

        
        <tr>
          <td>{{$nursecheckups->id}}</td>
          <td>{{$nursecheckups->f_name}}</td>
          <td>{{$nursecheckups->l_name}}</td>
          <td>{{$nursecheckups->bloodpressure}}</td>
          <td>{{$nursecheckups->respiratoryrate}}</td>
          <td>{{$nursecheckups->temperature}}</td>
          <td>{{$nursecheckups->heartrate}}</td>
          <td>{{$nursecheckups->disability}}</td>
          <td>{{$nursecheckups->sugarlevel}}</td>
          <td>{{$nursecheckups->weight}}</td>

        @endforeach

</tr>

        




    </tbody>
  </table>
<div>
</div>
@endsection