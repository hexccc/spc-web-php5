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
    
    $username = $request->input('username');
    $password = md5($request->input('password'));
    $query = DB::table('users')->select('password')->where('email', $username)->get();
    $data = [];
    $passwordCheck ="";
    if(count($query))
    {
        foreach($query as $k)
        {
          $passwordCheck = $k->password; 
        }

        if($passwordCheck == $password)
        {
          $query = DB::table('users')->select('id','status','name')->where('email', $username)->where('password',$password)->get();
        
          if(count($query) > 0)
          {
            foreach($query as $k)
            {
              $data['id'] = $k->id;
              $data['role'] = $k->status;
              $data['full_name'] = $k->name;
            }
            
            $request->session()->put($data);
            $data['message'] = "loginSuccess";
          }
          else{
            $data['message'] = "accountLocked";
          }
        }
        else
        {
            $data['message'] = "passwordError";
        }
    }
    else
    {
        $data['message'] = "usernameError";
    }
 

    return Response::json($data);
  }

  public function logout(Request $request)
  {
    $request->session()->flush();
    $data['msg'] = "logOutSuccessful";
    return Response::json($data);
  }

    
    public function asd123(Request $request)
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

      public function logout123(Request $request)
      {
        $request->session()->flush();
        return redirect('/admin-login');
      }
      
    
}
