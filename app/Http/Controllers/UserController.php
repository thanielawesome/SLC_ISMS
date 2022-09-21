<?php

namespace App\Http\Controllers;

use DB;
use View;
use Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(Request $request)
    {
        if($request->session()->get('id')==null){
        return redirect('/');
        }
        $id = $request->session()->get('id');
            $user_info = DB::table('users')
                    ->where('id', $id)
                    ->first();
       return View::make('/admin/home')->with(['user_info' => $user_info]);
    }
    public function logout(Request $request)
   {
      $request->session()->flush();
      return redirect('/');
   }
}


