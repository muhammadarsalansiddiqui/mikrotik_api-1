@extends('layouts')

@section('content')
<style media="screen">
th {
  background-color: #00BFFF;
}
</style>
<br><br>
@include('partials.success')
<h2 class="text-center"><b>User Hotspot</b></h1>
<div class="container-fluid">
  <div class="table table-bordered table-hover">
    <table class="table table-bordered table-hover">
      <tr class="table-primary">
        <th>No</th>
        <th>Name</th>
        <th>Password</th>
        <th>Profile</th>
      </tr>
      <tr>

     @foreach( $datas as $data)
        <td>{{ $data['.id'] }}</td>
        <td>{{ $data['name'] }}</td>
        <td>{{ $data['password'] }}</td>
        <td>{{ $data['profile'] }}</td>
      </tr>
      @endforeach
    </table>


  </div>
</div>


@endsection
