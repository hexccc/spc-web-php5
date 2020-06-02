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
          'btn' => $r->btn='&nbsp; <button class="btn btn-primary" onclick="formaction('.$r->id.',\'update\')"> <i class="fas fa-edit"></i> </button>'
                        
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
  
          $getForm = DB::table('engineering_building_form')->where('id',$id)->get();
  
          return Response::json($getForm);
      }
  
   
   
      public function store(Request $request)
      {
  
       
      
     
        $date = date("F j Y");


        $file_name = $request->file('formFile');
        if($file_name != null) {
          $new_file_name = date('Ymdhis', time()).'_thumb.'.$file_name->getClientOriginalExtension();
          $file_name->move(public_path('docs'), $new_file_name);
        } 
        else {
          $new_file_name = '';
        }
        $title = $request->input('formTitle');
        $date = date("F j Y");;
        $data = array(
          'title' => $title,
          'link' => $new_file_name,
          'created_at' => $date
        );
        // 'created_at' => $date,
        // 'updated_by' => 'Admin'

        $check = DB::table('engineering_building_form')->insert($data);

        $arr = array('msg' => 'Something goes to wrong. Please try again later', 'status' => false);
        if($check){
        $arr = array('msg' => 'Successfully News Posted'+ $title, 'status' => true);
        }
        return Response::json($data);
      }
  
    
  
      public function update(Request $request)
      {
       
        
        $file_name = $request->file('update_form_file');
        if ($file_name == null) {
          // Uplaod Text Only
          $id = $request->input('update_form_id');
          $title = $request->input('update_form_title');
          // $created_by = $request->input('created_by');
          $date = date("F j Y");
          $data = array(
            'title' => $title,
            'updated_at' => $date
          );
          $check = DB::table('engineering_building_form')->where('id', $id)->update($data);
  
          $arr = array('msg' => 'Something goes wrong. Please try again later', 'status' => false);
          if($check){
          $arr = array('msg' => 'Successfully News Posted', 'status' => true);
          }
          return Response::json($arr);
        }else{
          $id = $request->input('update_form_id');
          $new_file_name = date('Ymdhis', time()).'_thumb.'.$file_name->getClientOriginalExtension();
          $file_name->move(public_path('image'), $new_file_name);
          $title = $request->input('update_form_title');
          $date = date("F j Y");
          
          $data = array(
            'title' => $title,
            'link' => $new_file_name,
            'updated_at' => $date
  
          );
  
          $check = DB::table('engineering_building_form')->where('id', $id)->update($data);
          $arr = array('msg' => 'Something goes to wrong. Please try again later', 'status' => false);
          if($check){
          $arr = array('msg' => 'Successfully News Posted', 'status' => true);
          }
          return Response::json($arr);
  
        }
  
  
        }
  
  
      
  
}
