<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;

class android_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $query = DB::table('news_table')->get();

        foreach ($query as $r) {
          $data = array(
            'id' => $r->id,
            'title' => $r->title,
            'subtitle' => $r->subtitle,
            'content' => $r->content,
            'thumbnail' => $r->thumbnail,
            'video' => $r->video,
            'created_by' => $r->created_by,
            'updated_by' => $r->updated_by,
            'created_at' => $r->created_at,
            'updated_at' => $r->updated_at
          );
        }

        return Response::json($data);
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
      $date = date('Y-m-d h:i:s', time());
      $title = $request->input('title');
      $subtitle = $request->input('subtitle');
      $content = $request->input('content');
      $thumbnail = $request->input('thumbnail');
      $video = $request->input('video'); //Does we need a video link on app?
      $created_by = 'android device';
      $created_at = $date;

      $data = array(
        'date' => $date,
        'title' => $title,
        'subtitle' => $subtitle,
        'content' => $content,
        'thumbnail' => $thumbnail,
        'video' => $video,
        'created_by' => $created_by,
        'created_at' => $created_at
      );

      $check = DB::table('news_table')->insert($data);

      $arr = array('msg' => 'Something goes to wrong. Please try again lator', 'status' => false);
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
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
