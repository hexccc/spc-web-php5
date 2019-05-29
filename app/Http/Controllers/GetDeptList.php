<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetDeptList extends Controller
{
  function getList() {
    $ls = DB::select("CALL get_depts_ls()");
    return ["depts" => $ls];
  }
}
