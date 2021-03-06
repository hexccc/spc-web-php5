<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Response;

class spc_covid_data extends Controller
{
    public function tbCovid(Request $request)
    {
      $draw = $request->get('draw');
      $start = $request->get('start');
      $length = $request->get('length');
  
      $query = DB::table('spc_covid_count')->get();
  
      $data = [];
      foreach ($query as $r) {
        $data[] = array(
  
          'active' => $r->active_cases,
          'recoveries' => $r->recoveries,
          'death' => $r->deaths,
          'total_cases' => $r->total_cases,
          'publish_date' => $r->date,
          'btn' => $r->btn='&nbsp; <button class="btn btn-primary" onclick="covidAction('.$r->id.',\'update\')"> <i class="fas fa-edit"></i> </button>'
                        
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
          $id = $request->input('id');
  
          $getForm = DB::table('spc_covid_count')->where('id',$id)->get();
  
          return Response::json($getForm);
      }
  
   
   
      public function store(Request $request)
      {
        $date = date("F j Y");
      
        $data = array(
          'active_cases' => $request->input("active_case"),
          'recoveries' => $request->input("recoveries"),
          'deaths' => $request->input("death"),
          'total_cases' => $request->input("total_cases"),
          'date' => $date,
        );
        

        $check = DB::table('spc_covid_count')->insert($data);

        $arr = array('msg' => 'Something goes to wrong. Please try again later', 'status' => false);
        if($check){
       
        }
        return Response::json($data);
      }

      public function get_one_covid(Request $request)
      {

      }
  
    
  
      public function update(Request $request)
      {
       
        $id = $request->input("update_covid_id");
        $data = array(
          'active_cases' => $request->input("update_active_case"),
          'recoveries' => $request->input("update_recoveries"),
          'deaths' => $request->input("update_death"),
          'total_cases' => $request->input("update_total_cases"),
        );
  
          $check = DB::table('spc_covid_count')->where('id', $id)->update($data);
          $arr = array('msg' => 'Something goes to wrong. Please try again later', 'status' => false);
          if($check){
          $arr = array('msg' => 'Successfully News Posted', 'status' => true);
          }
          return Response::json($data);
         
        }
  
  
      
  
  
      
  
}
