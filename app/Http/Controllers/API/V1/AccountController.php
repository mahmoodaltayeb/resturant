<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Validator;  
use Carbon\Carbon;



class AccountController extends Controller
{
    
    public function account()
    {
        try {


            Auth::user()->setHidden(['id','email_verified_at','role_id','remember_token','password', 'created_at', 'updated_at']);

                    
            Auth::user()->birthday = Carbon::createFromFormat('Y-m-d H:i:s', Auth::user()->birthday)->format('d-m-Y');          
            return response()->json(
                [
                    'status' => 200,
                    'data'   => Auth::user()
                ],
                200
            );
        } catch (Exception $e) {
            return response()->json(
                [
                    'status' => 400,
                    'data'   => $e->getMessage()
                ],
                400
            );
        }
    }
}
