<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\News;
use Illuminate\Support\Facades\DB;
use Response;

class new_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      $draw = $request->get('draw');
      $start = $request->get('start');
      $length = $request->get('length');
      $query = DB::table('news_table')->orderBy('id', 'DESC')->get();
      
      $data = [];
      foreach ($query as $r) {
        $data[] = array(

          'id' => $r->id,
          'title' => $r->title,
          'subtitle' => $r->subtitle,
          'created_at' => $r->created_at,
          'updated_at' => $r->updated_at,
          'btn' => $r->btn='<button class="btn btn-success" onclick="changeAction('.$r->id.',\'view\')"> <i class="fas fa-search"></i> </button>'.
                           '&nbsp; <button class="btn btn-primary" onclick="changeAction('.$r->id.',\'update\')"> <i class="fas fa-edit"></i> </button>'.
                           '&nbsp; <button class="btn btn-danger" onclick="changeAction('.$r->id.',\'delete\')"> <i class="fas fa-trash"></i> </button>'
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $thumbnail_name = $request->file('thumbnail');
        $video_name = $request->file('video');
        if($thumbnail_name != null) {
          $new_thumbnail_name = date('Ymdhis', time()).'_thumb.'.$thumbnail_name->getClientOriginalExtension();
          $thumbnail_name->move(public_path('image'), $new_thumbnail_name);
        } else {
          $new_thumbnail_name = '';
        }
        if($video_name != null) {
          $new_video_name = date('Ymdhis', time()).'_vid.'.$video_name->getClientOriginalExtension();
          $video_name->move(public_path('videos'),$new_video_name);
        } else {
          $new_video_name = '';
        }
        $title = $request->input('title');
        $sub_title = $request->input('sub_title');
        $content = $request->input('content');
        $created_by = $request->input('created_by');
        $video = $request->input('add_news_video');
        $date = date('Y-m-d h:i:s', time());
        $data = array(
          'title' => $title,
          'subtitle' => $sub_title,
          'content' => $content,
          'thumbnail' => $new_thumbnail_name,
          'video' => $new_video_name,
          'created_by' => $created_by,
          'created_at' => $date,
          'updated_by' => 'Admin'
        );

        $check = DB::table('news_table')->insert($data);

        $arr = array('msg' => 'Something goes to wrong. Please try again later', 'status' => false);
        if($check){
        $arr = array('msg' => 'Successfully News Posted', 'status' => true);
        }
        return Response::json($arr);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->input('news_id');
        $get_news = DB::table('news_table')->sortByDesc($id)->where('id',$id)->get();
       

        return Response::json($get_news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $thumbnail_name = $request->file('update_thumbnail');
      if ($thumbnail_name == null) {
        // Uplaod Text Only
        $id = $request->input('update_news_id');
        $title = $request->input('update_title');
        $sub_title = $request->input('update_sub_title');
        $content = $request->input('update_content');
        $new_video_name = $request->input('update_news_video');
        // $created_by = $request->input('created_by');
        $date = date('Y-m-d h:i:s', time());
        $data = array(
          'title' => $title,
          'subtitle' => $sub_title,
          'content' => $content,
          'video' => $new_video_name,
          'updated_by' => 'admin',
          'updated_at' => $date
        );
        $check = DB::table('news_table')->where('id', $id)->update($data);

        $arr = array('msg' => 'Something goes to wrong. Please try again lator', 'status' => false);
        if($check){
        $arr = array('msg' => 'Successfully News Posted', 'status' => true);
        }
        return Response::json($arr);
      }else{
        // Upload with image
        $id = $request->input('update_news_id');
        $new_thumbnail_name = date('Ymdhis', time()).'_thumb.'.$thumbnail_name->getClientOriginalExtension();
        $thumbnail_name->move(public_path('image'), $new_thumbnail_name);
        $title = $request->input('update_title');
        $sub_title = $request->input('update_sub_title');
        $content = $request->input('update_content');
        $new_video_name = $request->input('update_news_video');
        // $created_by = $request->input('created_by');
        $date = date('Y-m-d h:i:s', time());
        $data = array(
          'title' => $title,
          'subtitle' => $sub_title,
          'content' => $content,
          'thumbnail' => $new_thumbnail_name,
          'video' => $new_video_name,
          'updated_by' => 'admin',
          'updated_at' => $date
        );

        $check = DB::table('news_table')->where('id', $id)->update($data);
        $arr = array('msg' => 'Something goes to wrong. Please try again lator', 'status' => false);
        if($check){
        $arr = array('msg' => 'Successfully News Posted', 'status' => true);
        }
        return Response::json($arr);

      }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $id = $request->input('delete_id');

      $check = DB::table('news_table')->where('id', $id)->delete();
      $arr = array('msg' => 'Something goes to wrong. Please try again lator', 'status' => false);
      if($check){
      $arr = array('msg' => 'Successfully News Deleted', 'status' => true);
      }
      return Response::json($arr);
    }

    public function getAllNewsHeadlines()
    {
      $query = DB::select('CALL get_news()');

      $data = [];
      foreach ($query as $r) {
        $data[] = array(
          // date('l jS \of F Y h:i:s A',strtotime($r->date_of_death)
          'id' => $r->id,
          'title' => $r->title,
          'subtitle' => $r->subtitle,
          'content' => $r->content,
          'thumbnail' => $r->thumbnail,
          'video' => $r->video,
          'created_at' => date("l jS \of F Y h:i:s A",strtotime($r->created_at)),
          // 'updated_at' => $r->updated_at
        );
      }

      return $data;
    }
}
