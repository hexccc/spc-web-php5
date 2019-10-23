<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Response;

class cms_controller extends Controller
{


    public function getHoliday()
    {

      // $datemonth = date("F");
      // $dateday = date("j");
      // ->where('month',$datemonth)->where('day',$dateday)
      $data1 = DB::table('holidays')->get();

      // $data = [];
      // foreach ($query as $r) {
      //   $data[] = array(
      //     // date('l jS \of F Y h:i:s A',strtotime($r->date_of_death)
      //     'id' => $r->id,
      //     'title' => $r->title,
      //     'link' => $r->link
      //     // 'content' => $r->content,
      //     // 'thumbnail' => $r->thumbnail,
      //     // 'video' => $r->video,
      //     // 'created_at' => date("l jS \of F Y h:i:s A",strtotime($r->created_at)),
      //     // 'updated_at' => $r->updated_at
      //   );
      
      // return $data;

      return Response::json($data1);
      }

      public function getAllLatestServices()
      {
        $query = DB::table('services')->get();
  
        $data = [];
        foreach ($query as $r) {
          $data[] = array(
            // date('l jS \of F Y h:i:s A',strtotime($r->date_of_death)
            'id' => $r->id,
            'title' => $r->title,
            'link' => $r->link
            // 'content' => $r->content,
            // 'thumbnail' => $r->thumbnail,
            // 'video' => $r->video,
            // 'created_at' => date("l jS \of F Y h:i:s A",strtotime($r->created_at)),
            // 'updated_at' => $r->updated_at
          );
        }
  
        return $data;
      }

      public function getForm()
      {
        $query = DB::table('engineering_building_form')->get();
  
        $data = [];
        foreach ($query as $r) {
          $data[] = array(
            // date('l jS \of F Y h:i:s A',strtotime($r->date_of_death)
            'id' => $r->id,
            'title' => $r->title,
            'link' => $r->link
            // 'content' => $r->content,
            // 'thumbnail' => $r->thumbnail,
            // 'video' => $r->video,
            // 'created_at' => date("l jS \of F Y h:i:s A",strtotime($r->created_at)),
            // 'updated_at' => $r->updated_at
          );
        }
  
        return $data;
      }

      public function getEvents1()
      {
        $query = DB::table('events_announcements')->orderByRaw('id DESC')->limit('1')->get();
  
        return Response::json($query);
      }
      public function getEvents2()
      {
        $query = DB::table('events_announcements')->orderByRaw('id DESC')->limit('5')->get();
  
        return Response::json($query);
      }

      public function getEvents()
      {
        $query = DB::table('events_announcements')->orderByRaw('id DESC')->limit('3')->get();
  
        return Response::json($query);
      }
      public function getNews()
      {
        $query = DB::table('news_table')->orderByRaw('id DESC')->limit('10')->get();
  
        return Response::json($query);
      }

     
}
