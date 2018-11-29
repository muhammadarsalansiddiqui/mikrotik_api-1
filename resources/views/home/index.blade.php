@extends('layouts')

@section('content')


<div class="row">
  <div class="col-xs-6 col-md-3">
    <div class="panel panel-default">
      <div class="panel-body easypiechart-panel">
        <h4>Users Online</h4>
        <div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent">92%</span></div>
      </div>
    </div>
  </div>
  <div class="col-xs-6 col-md-3">
    <div class="panel panel-default">
      <div class="panel-body easypiechart-panel">
        <h4>Members</h4>
        <div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent">65%</span></div>
      </div>
    </div>
  </div>
  <div class="col-xs-6 col-md-3">
    <div class="panel panel-default">
      <div class="panel-body easypiechart-panel">
        <h4>New Users</h4>
        <div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">56%</span></div>
      </div>
    </div>
  </div>
  <div class="col-xs-6 col-md-3">
    <div class="panel panel-default">
      <div class="panel-body easypiechart-panel">
        <h4>Visitors</h4>
        <div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span></div>
      </div>
    </div>
  </div>
</div><!--/.row-->

@endsection
