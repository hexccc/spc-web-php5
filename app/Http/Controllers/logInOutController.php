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
    

                     
          if(count($users) > 0)
          {
            foreach($users as $k)
              {
               $name = $k->name;
               $stats= $k->status;
              }

        
              $request->session()->put('name',    $name);
              $request->session()->put('status',   $stats);
              return Response::json($users);
          }
          return Response::json('invalid');
          
          
      }

      public function logOut(Request $request)
      {
        $request->session()->flush();
        return redirect('/admin-login');
      }
      
    
}
