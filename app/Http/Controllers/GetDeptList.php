<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetDeptList extends Controller
{
  function getList() {
    $ls = DB::select("CALL get_depts_ls()");
    return ["brgys" => $ls];
  }
}
