<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Response;

class holidayController extends Controller
{
    public function tbHolidays(Request $request)
    {
      $draw = $request->get('draw');
      $start = $request->get('start');
      $length = $request->get('length');
  
      $query = DB::table('holidays')->get();
  
      $data = [];
      foreach ($query as $r) {
        $data[] = array(
  
          'id' => $r->id,
          'title' => $r->title,
          'greetings' => $r->greetings,
          'date' => $r->month ." ". $r->day,
          'btn' => $r->btn='<button class="btn btn-success" onclick="holidayAction('.$r->id.',\'view\')"> <i class="fas fa-search"></i> </button>'.
                           '&nbsp; <button class="btn btn-primary" onclick="holidayAction('.$r->id.',\'update\')"> <i class="fas fa-edit"></i> </button>'.
                           '&nbsp; <button class="btn btn-danger" onclick="holidayAction('.$r->id.',\'delete\')"> <i class="fas fa-trash"></i> </button>'
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
  
          $get_holidays = DB::table('holidays')->where('id',$id)->get();
  
          return Response::json($get_holidays);
      }
  
   
   
      public function store(Request $request)
      {
  
       
        $title = $request->input('holidayTitle');
        $greetings = $request->input('holidayGreetings');
        $month = $request->input('holidayMonth');
        $day = $request->input('holidayDay');
       
        $data = array(
          'title' => $title,
          'greetings' => $greetings,
          'month' => $month,
          'day' => $day
        );

          $check = DB::table('holidays')->insert($data);
  
          $arr = array('msg' => 'Something goes to wrong. Please try again later', 'status' => false);
          if($check){
          $arr = array('msg' => 'Successfully Holiday Posted'+ $title, 'status' => true);
          }
          return Response::json($data);
      }
  
    
  
      public function update(Request $request)
      {
       
        
          $id = $request->input('update_holiday_id');
          $title = $request->input('update_holiday_title');
          $greetings = $request->input('update_holiday_greetings');
          $month = $request->input('update_holiday_month');
          $day = $request->input('update_holiday_day');
         
          $data = array(
            'title' => $title,
            'greetings' => $greetings,
            'month' => $month,
            'day' => $day
          );
          
          $check = DB::table('holidays')->where('id', $id)->update($data);
  
          $arr = array('msg' => 'Something goes wrong. Please try again later', 'status' => false);
          if($check){
          $arr = array('msg' => 'Successfully Updated', 'status' => true);
          }
          return Response::json($arr);
  
        }


      
  
      public function destroy(Request $request)
      {
        $id = $request->input('delete_id');
  
        $check = DB::table('holidays')->where('id', $id)->delete();
        $arr = array('msg' => 'Something goes to wrong. Please try again later', 'status' => false);
        if($check){
        $arr = array('msg' => 'Successfully Deleted', 'status' => true);
        }
        return Response::json($arr);
      }
}
