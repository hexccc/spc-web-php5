<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
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

      $query = DB::table('news_table')->get();

      $data = [];
      foreach ($query as $r) {
        $data[] = array(

          'id' => $r->id,
          'title' => $r->title,
          'subtitle' => $r->subtitle,
          'created_at' => $r->created_at,
          'updated_at' => $r->updated_at,
          'btn' => $r->btn='<select type="button" id="action_btn" onchange="changeAction('.$r->id.')" class="btn btn-primary" name="button">'.
                              '<option value="---">'.
                                'Choose Action'.
                              '</option>'.
                              '<option value="view">'.
                                'View'.
                              '</option>'.
                              '<option value="update">'.
                                'Update'.
                              '</option>'.
                              '<option value="delete">'.
                                'Delete'.
                              '</option>'.
                            '</select>'
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

      $new_thumbnail_name = date('Ymdhis', time()).'_thumb.'.$thumbnail_name->getClientOriginalExtension();
      $thumbnail_name->move(public_path('image'), $new_thumbnail_name);

      $new_video_name = date('Ymdhis', time()).'_vid.'.$video_name->getClientOriginalExtension();
      $video_name->move(public_path('videos'),$new_video_name);

        $title = $request->input('title');
        $sub_title = $request->input('sub_title');
        $content = $request->input('content');
        $created_by = $request->input('created_by');
        $date = date('Y-m-d h:i:s', time());
        $data = array(
          'title' => $title,
          'subtitle' => $sub_title,
          'content' => $content,
          'thumbnail' => $new_thumbnail_name,
          'video' => $new_video_name,
          'created_by' => $created_by,
          'created_at' => $date
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
