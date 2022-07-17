<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    //
            public function index()
    {
        //
        return view('web.login-page.login-page');
    }

   function doLogin(Request $request){

       $this->validate($request, [
          'email'   => 'required|email',
          'password'  => 'required|alphaNum|min:3'
      ]);

       $user_data = array(
          'email'  => $request->get('email'),
          'password' => $request->get('password')
      );

       if(Auth::attempt($user_data)){
          return redirect('/home');

        return ($user_data);
      }
      else
      {
          return back()->with('error', 'Wrong Login Details');
          //  return ("faild login");
      }

  }

  public function logout()
    {
        //Session::flush();
        
        Auth::logout();

        return redirect('/home');
    }
}
