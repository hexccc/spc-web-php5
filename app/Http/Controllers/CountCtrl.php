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
      return view('home')->with(["count" => $cnt]);
    }
}
