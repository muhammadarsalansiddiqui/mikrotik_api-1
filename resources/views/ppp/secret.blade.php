@extends('ppp.subnav')


@section('conten')
<br>
@include('partials.success')
<br>
@include('ppp.button')
<br>
<style media="screen">
  th {
    background-color: #00BFFF;
  }
</style>
<div class="container-fluid">
  <table class="table table-bordered table-hover">
       <th >#</th>
       <th >Name</th>
       <th >Password</th>
       <th >Service</th>
       <th >Caller ID</th>
       <th >Profile</th>
       <th >Local Address</th>
       <th >Remote Address</th>
       <th>Status</th>
       <th colspan="3">Action</th>


  <tr>

    @foreach($ARRAY as $data)
      <td>{{ $data['.id'] }}</td>
      <td>{{ $data['name'] }}</td>
      <td>{{ $data['password'] }}</td>
      <td>{{ $data['service'] }}</td>
      <td>{{ $data['caller-id'] }}</td>
      <td>{{ $data['profile'] }}</td>
      <td></td>
      <td>{{ $data['remote-address'] }}</td>

      <td> {{ session()->get('message') }}</td>
      <td><a href="{{url('/ppp/secret/enable/'. $data['.id']) }}"  class="glyphicon glyphicon-ok"></a></td>
      <td><a href="{{url('/ppp/secret/disable/'. $data['.id']) }}" class="glyphicon glyphicon-remove"></a></td>
      <td><a href="{{url('/ppp/secret/remove/'. $data['.id']) }}"  class="glyphicon glyphicon-trash"></a></td>




  </tr>
  @endforeach

@yield('data')

  </table>
</div>

@endsection
