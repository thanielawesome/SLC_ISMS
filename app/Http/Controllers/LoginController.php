<?php

namespace App\Http\Controllers;
use DB;
use View;
use Users;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        
       return View::make('welcome');
    }

    public function login_process(Request $request)
    { 
        if ($request->has('submit')) 
        {
            $username = $request->input('username');
            $password = $request->input('password');
            $query = DB::table('users as id')
                            ->where('username', $username)
                            ->where('password', $password)
                            ->count();

            $result = DB::table('users as id')
                            ->where('username', $username)
                            ->where('password', $password)
                            ->get();

                     
            if ($query > 0 )
            {
               $request->session()->put('username',$username);
               $request->session()->put('id',$result[0]->id);
                    $id = $request->input('username');
                    $user_info = DB::table('users as id')
                            ->where('id.username', $id)
                            ->first();
                    $position = $user_info->position;
                    if($position == 'Admin'){
                        return redirect('/admin/home')->with(['user_info' => $user_info])->with('success','YOU SUCCESSFULLY LOGGED IN! ');
                    }elseif($position == 'Student'){
                        $success = "YOU SUCCESSFULLY LOGGED IN!";
                        return View::make('/student/home',compact('success'))->with(['user_info' => $user_info]);
                    }else{
                        return redirect('/user/home')->with(['user_info' => $user_info])->with('success','YOU SUCCESSFULLY LOGGED IN! ');
                    }
                    
            }else
            {
                $request->session()->flush();
                return redirect('/')->with('error','THE LOGIN YOU HAVE ENTERED IS INCORRECT! ');
            }
        }
    }

   public function logout(Request $request)
   {
      $request->session()->flush();
      return redirect('/');
   }
}

