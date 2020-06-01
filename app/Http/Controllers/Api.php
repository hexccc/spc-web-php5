<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Response;

class Api extends Controller
{
    public function getNews(){
        $data = [];

        $query = DB::table("news_table")
                        ->select("title","subtitle","content","thumbnail")
                        ->get();
        $nestedData = [];
        foreach($query as $k)
        {
            $nestedData["title"] = $k->title;
            $nestedData["subtitle"] = $k->subtitle;
            $nestedData["content"] = $k->content;
            $nestedData["thumbnail"] = $k->thumbnail;
            $data[] = $nestedData;
        }
        $sendData["data"] = $data;
        return Response::json($sendData);
    }

    public function getService(){
        $data = [];

        $query = DB::table()
                        ->select()
                        
                        ->get();
        $nestedData = [];
        foreach($query as $k)
        {
            $nestedData["title"] = $k->title;
            $nestedData["subtitle"] = $k->subtitle;
            $nestedData["content"] = $k->content;
            $nestedData["thumbnail"] = $k->thumbnail;
            $data[] = $nestedData;
        }

        return Response::json($data);
    }

   
}
