<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Response;

class Jcontroller extends Controller
{

public function addnewbuss(Request $request)
{
  $input  = $request->input('new');
  $draw = $request->get('draw');
  // DB::insert("INSERT INTO `clients`(``)VALUES(?)", [$input]);
  // return redirect('/form');
  return Response::json($input);
  return $request;
}

public function addReg(Request $request)
{
  $input  = $request->input('buss_client');
  // return redirect('/form{name = $name}');
  return Response::json($input);
}

public function signinReg(Request $request)
{
  $input  = $request->input('user');
  return Response::json($input);
}

public function addlineofbuss(Request $request)
{
    $input  = $request->input('new[busact_addsubcat]');
    return $input;
}


}
