<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;  


class LoginController extends Controller
{
    //
    public function doLogin(Request $request) {

        try {

            $validatedForm = Validator::make($request->all(), 
                [
                    'email' => ['required', 'email'], 
                    'password'   => ['required', 'string'], 
                    
                ]);

            if ($validatedForm->fails()) {
                return response()->json(['status' => 401, 'errors' => $validatedForm->errors() ], 401, [], JSON_UNESCAPED_SLASHES);
            }


      if(Auth::attempt(['email' => $request->email , 'password' => $request->password])){
        

         return response()->json(['status' => 200,'api_token' => Auth::user()->api_token], 200, [], JSON_UNESCAPED_SLASHES);
      }

      return response()->json(['status' => 405 , 'message' => 'Invalid email or password'],405);
            
         
        }
      catch(Exception $e) {
            report($e);
            $e = $e->getMessage();
            return response()->json(['status' => 400, 'errors' => $e], 400, [], JSON_UNESCAPED_SLASHES);
        }
    }


}
