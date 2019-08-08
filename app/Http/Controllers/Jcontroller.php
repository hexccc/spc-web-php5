<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\News;
use Illuminate\Support\Facades\DB;
use Response;

class Jcontroller extends Controller
{


public function addnewbuss(Request $request)
{

  $input  = $request->input('new');
  return $input['basicnew'];
  return Response::json($input);


return $request;
}


}
