@extends('layouts')

@section('content')

<style media="screen">
	.subnav {
		background-color: #e9ecf2;

	}
</style>

<div class="subnav">
	<ul class="nav nav-pills">
		<li><a href= {{ url('interface') }} >Interface</a></li>
		<li class=""><a href="">PPPoE Servers</a></li>
		<li class=""><a href= {{ url('secret') }} >Secrets</a></li>
		<li class=""><a href="">Profiles</a></li>
		<li class=""><a href="">Active Connections</a></li>
		<li class="pull-right"><a href=""><strong>PPP</strong></a></li>
	</ul>
</div>


@yield('conten')

@endsection
