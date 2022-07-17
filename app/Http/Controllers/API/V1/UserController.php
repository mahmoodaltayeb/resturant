<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\City;
use App\Models\District;
use Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Carbon\Carbon;




class UserController extends Controller
{

    public function showUsers() {
        
        $users = User::orderBy('id','asc')->get();

        return response()->json(['status' => 200 , 'users' => $users]);  
    }


    public function doRegister(Request $request) {

        try {

            $validatedForm = Validator::make($request->all(), 
                [
                    'first_name' => ['required', 'string','min:3','max:10'], 
                    'first_name' => ['required', 'string','min:3','max:10'], 
                    'email'      => ['required','unique:users,email'], 
                    'phone'      => ['required','regex:/(^07[789]\d{7}$)/u'], 
                    'password'   => ['required', 'string'], 
                    
                ]);



            if ($validatedForm->fails()) {
                return response()->json(['status' => 401, 'errors' => $validatedForm->errors() ], 401, [], JSON_UNESCAPED_SLASHES);
            }

            $user_data = $request->all();
            $user_data['password'] = Hash::make($request->input('password'));
            


            // if role is customer
            if (empty($request->input('role_id'))) {
                $user_data['role_id'] = 2;
                
            }

            $org_Date = $user_data['birthday'];  
            $new_date = date("Y-m-d", strtotime($org_Date)); 
            $user_data['birthday']=$new_date;

            

            $user_data['api_token'] = Str::random(60);
            $user = User::create($user_data);

            $user->setHidden(['password', 'created_at', 'updated_at']);

            return response()->json(['status' => 200, 'message' => 'Your account has been registered successfully', 'user' => $user], 200, [], JSON_UNESCAPED_SLASHES);
        }
        catch(Exception $e) {
            report($e);
            $e = $e->getMessage();
            return response()->json(['status' => 400, 'errors' => $e], 400, [], JSON_UNESCAPED_SLASHES);
        }
    }


}

