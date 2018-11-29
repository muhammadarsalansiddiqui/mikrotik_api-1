<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
  use App\Lib\RouterosAPI;
class PPPController extends Controller
{



    public function addSecret(Request $req)
    {
      $name = $req->input('name');
      $password = $req->input('password');
      $services = $req->input('services');
      $services = $req->input('services');
      $calledid = $req->input('calledid');
      $profile = $req->input('profile');
      $localaddress = $req->input('localaddress');
      $remoteaddress = $req->input('remoteaddress');




      $API = new RouterosAPI();

      $hostname = session()->get('hostname');
      $username = session()->get('username');
      $password = session()->get('password');

  if ($API->connect($hostname , $username, $password)) {

     $API->comm("/ppp/secret/add", array(
        "name"     => "$name",
        "password" => "$password",
        // "remote-address" => "$remoteaddress",

        "service"  => "pptp",
     ));
     session()->flash('success' , 'Secret Created Successfully');

     $API->disconnect();
      return redirect()->back();

       }
       return redirect()->back();
    }



    public function showSecret()
    {

      include('koneksi.php');
      if ($koneksi) {
          $API->write('/ppp/secret/print');
          $READ = $API->read(false);
          $ARRAY = $API->parseResponse($READ);

          $API->disconnect();
                    //print_r($ARRAY);
          return view('ppp.secret', compact('ARRAY'));


        }

      }

      public function disable_Secret($id)
      {
        include('koneksi.php');

        if ($koneksi) {
              $API->comm('/ppp/secret/disable', array(
                'numbers' => $id
              ));
                session()->flash('success' , 'Secret Disable Successfully');
                $API->disconnect();
        } else {
          echo "Gagal ";
      }

      session()->put('message', 'Disabled');

      return redirect('/ppp');

    }


    public function enable_Secret($id)
    {
              include('koneksi.php');

            if ($koneksi) {
                  $API->comm('/ppp/secret/enable', array(
                    'numbers' => $id
                  ));
                    session()->flash('success' , 'Secret Enable Successfully');
            } else {
              echo "Gagal ";
          }
          session()->put('message', 'Enabled');
          return redirect('/ppp');

  }

  public function remove_Secret($id)
  {
    include('koneksi.php');

    if ($koneksi) {
          $API->comm('/ppp/secret/remove', array(
            'numbers' => $id
          ));
          session()->flash('success' , 'Secret Deleted Successfully');
            // echo "Sukses";
    } else {
      echo "Gagal ";
  }
  return redirect('/ppp');

  }
}
