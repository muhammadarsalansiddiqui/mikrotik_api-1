<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lib\RouterosAPI;
use App\Http\Controllers\KoneksiController;
  use AuthenticatesUsers;
class LoginController extends Controller
{

public function index(){
  return view('home.index');
}

  public function login(Request $request)
  {

    $API = new RouterosAPI();

    $hostname = $request->input('hostname');
    $username = $request->input('username');
    $password = $request->input('password');

     session()->put('hostname', $hostname);
     session()->put('username', $username);
     session()->put('password', $password);



     $data = array(
      'hostname' => $hostname,
      'username' => $username,
      'password' => $password
    );



    $API->debug = true;

    if ($API->connect($hostname, $username, $password)) {

      $message = "Sukses Terhubung Dengan Mikrotik";
      echo "<script type='text/javascript'>alert('$message')</script>";
       $API->disconnect();

    } else {
      $message = "Gagal Terhubung";
      echo "<script type='text/javascript'>alert('$message')</script>";

      return redirect('/');
    }


    return view('home.index' ,compact('data'));

  }
  public  function  logout()
  {
    session()->flush();
    return  view('login');
  }


}
