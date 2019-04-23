<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetBrgyLs extends Controller
{
    function getList() {
			$ls = DB::select("CALL get_brgy_ls()");
			return ["brgys" => $ls];
		}
}
