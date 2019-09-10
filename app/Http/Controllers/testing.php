<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\DB;


class testing extends Controller
{
    public function save(Request $data)
    {
      $input = $data->input('user');
        $ar = array(
        'email' =>   $input['username'],
        'password' => $input['password']
        );

$users = DB::table('users')
                     ->select('status')
                     ->where('password',$input['password'] )
                     ->where('email',$input['username'])
                     ->get();

        return Response::json($users);
    }
}
