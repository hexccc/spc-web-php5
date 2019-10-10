<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\DB;
use App\Users;
use Auth;


class logInOutController extends Controller
{
    public function save(Request $request)
      {
        $input = $request->input('user');
          $ar = array(
          'email' =>   $input['username'],
          'password' => $input['password']
          );

            $users = DB::table('users')
                                ->select('*')
                                ->where('password',$input['password'] )
                                ->where('email',$input['username'])
                                ->get();
          $userdata = array();
          if($users)
          {
            foreach($users as $k)
              {
                $userdata['name'] = $k->name;
                $userdata['status'] = $k->status;
              }
              $request->session()->put('name',$userdata['name']);
              $request->session()->put('status',$userdata['status']);
            return Response::json($users);
          }
          
          
          
      }

      public function logOut(Request $request)
      {
        $request->session()->flush();
        return redirect('/admin-login');
      }
      
    
}
