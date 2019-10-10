<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\DB;

class pylonAdminController extends Controller
{
   
	
    public function index(Request $request)
    {   
        if($request->session()->get('status') == "Admin")
        {
            return view('pylon-admin');
        }
        else {
            return view('admin-login'); 
        }
        
    }
}
