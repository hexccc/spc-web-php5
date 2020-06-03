<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Response;

class spc_web_link extends Controller
{
    public function webLinks(Request $request)
    {
      $draw = $request->get('draw');
      $start = $request->get('start');
      $length = $request->get('length');
  
      $query = DB::table('spc_web_links')->get();
  
      $data = [];
      foreach ($query as $r) {
        $data[] = array(
  
          'name' => $r->name,
          'link' => $r->link,
          'btn' => $r->btn='&nbsp; <button class="btn btn-primary" onclick="webAction('.$r->id.',\'update\')"> <i class="fas fa-edit"></i> </button>'
                        
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
  
          $getForm = DB::table('spc_web_links')->where('id',$id)->get();
  
          return Response::json($getForm);
      }
  
   
   
      public function store(Request $request)
      {
        $date = date("F j Y");
      
        $data = array(
          'name' => $request->input("spc_web_name"),
          'link' => $request->input("spc_web_link"),
          'date' => $date,
        );
        

        $check = DB::table('spc_web_links')->insert($data);

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
       
        $id = $request->input("update_web_id");
        $data = array(
          'name' => $request->input("update_spc_web_name"),
          'link' => $request->input("update_spc_web_link"),
        );
  
          $check = DB::table('spc_web_links')->where('id', $id)->update($data);
          $arr = array('msg' => 'Something goes to wrong. Please try again later', 'status' => false);
          if($check){
          $arr = array('msg' => 'Successfully News Posted', 'status' => true);
          }
          return Response::json($data);
         
        }
  
  
      
  
  
      
  
}
