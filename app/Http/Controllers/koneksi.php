<?php
use App\Lib\RouterosAPI;

$API = new RouterosAPI();

$hostname = session()->get('hostname');
$username = session()->get('username');
$password = session()->get('password');

 $koneksi = $API->connect($hostname , $username, $password);

 ?>
