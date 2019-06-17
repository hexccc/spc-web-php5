<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetBrgyLs extends Controller
{
    function getList() {
			$ls = DB::select("CALL get_brgys_ls()");
			return ["brgys" => $ls];
		}

    public function viewToWeb() {
      return view('barangay')->with($this->getList());
    }
}
