<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CountCtrl extends Controller
{
    public function countVisit() {
      $q = "CALL get_current_count()";
      $res = DB::select($q);
      $cnt = $res[0]->count + 1;
      DB::select("CALL save_count(".$cnt.")");
      $news = DB::select("CALL get_news()");
      return view('home')->with([
        "count" => $cnt,
        "news" => $news
      ]);
    }

    public function getNews() {
      return DB::select("CALL get_news()");
    }

}
