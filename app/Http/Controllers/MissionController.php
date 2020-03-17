<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Response;

class MissionController extends Controller
{


  public function tbMission(Request $request)
  {
    $draw = $request->get('draw');
    $start = $request->get('start');
    $length = $request->get('length');

    $query = DB::table('missionpanel')->get();

    $data = [];
    foreach ($query as $r) {
      $data[] = array(

      );
    }
    $result = array(
              "draw" => $draw,
              "recordsTotal" => $query->count(),
              "recordsFiltered" => $query->count(),
              "data" => $data
          );


    return $result;
    
  }



  public function show(Request $request)
      {

  
          $get_missionpanel = DB::table('missionpanel')->where('idmissionpanel' , 1)->get();
  
          return Response::json($get_missionpanel);
      }


public function update(Request $request)
      {
    alert("hi");
}
}
  

  
    

