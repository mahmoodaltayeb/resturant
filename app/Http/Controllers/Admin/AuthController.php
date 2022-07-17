<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.signin');
    }

   function doLogin(Request $request){

      //return $request;
       $this->validate($request, [
          'email'   => 'required|email',
          'password'  => 'required|alphaNum|min:3'
      ]);

       $user_data = array(
          'email'  => $request->get('email'),
          'password' => $request->get('password')
      );

       if(Auth::attempt($user_data)){
          return redirect('/');

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
        Auth::logout();
        return redirect('/sign-in');
    }



}
