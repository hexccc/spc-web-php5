<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Response;

class servicesController extends Controller
{
    public function tbServices(Request $request)
    {
      $draw = $request->get('draw');
      $start = $request->get('start');
      $length = $request->get('length');
  
      $query = DB::table('services')->get();
  
      $data = [];
      foreach ($query as $r) {
        $data[] = array(
  
          'id' => $r->id,
          'title' => $r->title,
          'link' => $r->link,
          'created_at' => $r->created_at,
          'updated_at' => $r->updated_at,
          'btn' => $r->btn='<button class="btn btn-success" onclick="serviceAction('.$r->id.',\'view\')"> <i class="fas fa-search"></i> </button>'.
                           '&nbsp; <button class="btn btn-primary" onclick="serviceAction('.$r->id.',\'update\')"> <i class="fas fa-edit"></i> </button>'.
                           '&nbsp; <button class="btn btn-danger" onclick="serviceAction('.$r->id.',\'delete\')"> <i class="fas fa-trash"></i> </button>'
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
  
          $get_events = DB::table('services')->where('id',$id)->get();
  
          return Response::json($get_events);
      }
  
   
   
      public function store(Request $request)
      {
  
       
        $title = $request->input('serviceTitle');
        $link = $request->input('serviceLink');
        $date = date("F j Y");


        $data = array(
          'title' => $title,
          'link' => $link,
          'created_at' => $date
        );

          $check = DB::table('services')->insert($data);
  
          $arr = array('msg' => 'Something goes to wrong. Please try again later', 'status' => false);
          if($check){
          $arr = array('msg' => 'Successfully News Posted'+ $title, 'status' => true);
          }
          return Response::json($data);
      }
  
    
  
      public function update(Request $request)
      {
       
        
          $id = $request->input('update_service_id');
          $title = $request->input('update_service_title');
          $link = $request->input('update_service_link');
          $date = date("F j Y");
         
          $data = array(
            'title' => $title,
            'link' => $link,
            'updated_at' => $date
          );
          $check = DB::table('services')->where('id', $id)->update($data);
  
          $arr = array('msg' => 'Something goes wrong. Please try again later', 'status' => false);
          if($check){
          $arr = array('msg' => 'Successfully Updated', 'status' => true);
          }
          return Response::json($arr);
  
        }
  
  
      
  
      public function destroy(Request $request)
      {
        $id = $request->input('delete_id');
  
        $check = DB::table('services')->where('id', $id)->delete();
        $arr = array('msg' => 'Something goes to wrong. Please try again later', 'status' => false);
        if($check){
        $arr = array('msg' => 'Successfully Deleted', 'status' => true);
        }
        return Response::json($arr);
      }
}
