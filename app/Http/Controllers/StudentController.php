<?php

namespace App\Http\Controllers;

use DB;
use View;
use Users;
use Illuminate\Http\Request;

class StudentController extends Controller
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
       return View::make('/student/home')->with(['user_info' => $user_info]);
    }

    public function form_shifter(Request $request)
    {
        if($request->session()->get('id')==null){
        return redirect('/');
        }
        $id = $request->session()->get('id');
            $user_info = DB::table('users')
                    ->where('id', $id)
                    ->first();
       return View::make('/student/form_shifter')->with(['user_info' => $user_info]);
    }

      public function individual_form(Request $request)
    {
        if($request->session()->get('id')==null){
        return redirect('/');
        }
        $id = $request->session()->get('id');
            $user_info = DB::table('users')
                    ->where('id', $id)
                    ->first();
       return View::make('/student/individual_form')->with(['user_info' => $user_info]);
    }

     public function reg_form(Request $request)
    {
        if($request->session()->get('id')==null){
        return redirect('/');
        }
        $id = $request->session()->get('id');
            $user_info = DB::table('users')
                    ->where('id', $id)
                    ->first();
       return View::make('/student/reg_form')->with(['user_info' => $user_info]);
    }

    public function ext_form(Request $request)
    {
        if($request->session()->get('id')==null){
        return redirect('/');
        }
        $id = $request->session()->get('id');
            $user_info = DB::table('users')
                    ->where('id', $id)
                    ->first();
       return View::make('/student/ext_form')->with(['user_info' => $user_info]);
    }



    public function logout(Request $request)
   {
      $request->session()->flush();
      return redirect('/');
   }
}

