<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Response;

class spc_covid extends Controller
{
   public function getSPCData()
   {
        $query = DB::table("spc_covid_count")
                        ->select("*")
                        ->get();
        
        return Response::json($query);
   }

   public function getSPCWebLink()
   {
        $query = DB::table("spc_web_links")
                ->select("*")
                ->get();

            return Response::json($query);
   }
}
