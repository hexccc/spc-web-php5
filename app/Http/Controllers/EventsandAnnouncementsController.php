<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Response;

class EventsandAnnouncementsController extends Controller
{


  public function tbEvents(Request $request)
  {
    $draw = $request->get('draw');
    $start = $request->get('start');
    $length = $request->get('length');

    $query = DB::table('events_announcements')->get();

    $data = [];
    foreach ($query as $r) {
      $data[] = array(

        'id' => $r->id,
        'title' => $r->title,
        'created_at' => $r->created_at,
        'updated_at' => $r->updated_at,
        'btn' => $r->btn='<button class="btn btn-success" onclick="eventAction('.$r->id.',\'view\')"> <i class="fas fa-search"></i> </button>'.
                         '&nbsp; <button class="btn btn-primary" onclick="eventAction('.$r->id.',\'update\')"> <i class="fas fa-edit"></i> </button>'.
                         '&nbsp; <button class="btn btn-danger" onclick="eventAction('.$r->id.',\'delete\')"> <i class="fas fa-trash"></i> </button>'
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

        $get_events = DB::table('events_announcements')->where('id',$id)->get();

        return Response::json($get_events);
    }

 
 
    public function store(Request $request)
    {

        $thumbnail_name = $request->file('eventThumbnail');
        if($thumbnail_name != null) {
          $new_thumbnail_name = date('Ymdhis', time()).'_thumb.'.$thumbnail_name->getClientOriginalExtension();
          $thumbnail_name->move(public_path('image'), $new_thumbnail_name);
        } 
        else {
          $new_thumbnail_name = '';
        }
        $title = $request->input('eventTitle');
        $date = date("F j Y");;
        $data = array(
          'title' => $title,
          'thumbnail' => $new_thumbnail_name,
          'created_at' => $date
        );
        // 'created_at' => $date,
        // 'updated_by' => 'Admin'

        $check = DB::table('events_announcements')->insert($data);

        $arr = array('msg' => 'Something goes to wrong. Please try again later', 'status' => false);
        if($check){
        $arr = array('msg' => 'Successfully News Posted'+ $title, 'status' => true);
        }
        return Response::json($data);
    }

  

    public function update(Request $request)
    {
      $thumbnail_name = $request->file('update_thumbnail');
      if ($thumbnail_name == null) {
        // Uplaod Text Only
        $id = $request->input('update_events_id');
        $title = $request->input('update_title');
        // $created_by = $request->input('created_by');
        $date = date("F j Y");
        $data = array(
          'title' => $title,
          'updated_at' => $date
        );
        $check = DB::table('events_announcements')->where('id', $id)->update($data);

        $arr = array('msg' => 'Something goes wrong. Please try again later', 'status' => false);
        if($check){
        $arr = array('msg' => 'Successfully News Posted', 'status' => true);
        }
        return Response::json($arr);
      }else{
        $id = $request->input('update_events_id');
        $new_thumbnail_name = date('Ymdhis', time()).'_thumb.'.$thumbnail_name->getClientOriginalExtension();
        $thumbnail_name->move(public_path('image'), $new_thumbnail_name);
        $title = $request->input('update_title');
        $date = date("F j Y");
        
        $data = array(
          'title' => $title,
          'thumbnail' => $new_thumbnail_name,
          'updated_at' => $date

        );

        $check = DB::table('events_announcements')->where('id', $id)->update($data);
        $arr = array('msg' => 'Something goes to wrong. Please try again later', 'status' => false);
        if($check){
        $arr = array('msg' => 'Successfully News Posted', 'status' => true);
        }
        return Response::json($arr);

      }


    }

    public function destroy(Request $request)
    {
      $id = $request->input('delete_id');

      $check = DB::table('events_announcements')->where('id', $id)->delete();
      $arr = array('msg' => 'Something goes to wrong. Please try again later', 'status' => false);
      if($check){
      $arr = array('msg' => 'Successfully News Deleted', 'status' => true);
      }
      return Response::json($arr);
    }

  }

    
    

