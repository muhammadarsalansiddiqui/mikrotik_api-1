<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotspotController extends Controller
{
    public function index()
    {
      return view('Hotspots.form_add_user');
    }



    public function hotspot_create_user(Request $request)
    {
      $name = $request->input('name');
      $password = bcrypt($request->input('password'));

      include('koneksi.php');
      if ($koneksi) {
        $API->comm("/ip/hotspot/user/add",  array(

          'name' => $name,
          'password' => $password,
        ));
        $API->disconnect();
        return redirect('/hotspot/all-user')->with('success', 'User Created Successfully');
      }

    }


    public function hotspot_all_user()
    {
      include('koneksi.php');
      if($koneksi){
        $API->write('/ip/hotspot/user/print');
        $READ = $API->read(false);
        $datas = $API->parseResponse($READ);

        $API->disconnect();

        return view('hotspots.hotspot_all_user', compact('datas'));
      }
    }

}
