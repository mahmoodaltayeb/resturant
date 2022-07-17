<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\City;
use App\Models\District;
use Illuminate\Support\Str;
use Hash;
use Carbon\Carbon;





class UserController extends Controller
{

    public $city_id = null;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
     try {

      /*
        get() => array
        first() => oject
      */

        // **********************************



    //$posts = Post::orderBy('id','desc')->paginate(2);


    // $districts = District::where('city_id' , 3)->get();
    // $all_users = User::all();
    // $users = array();

    // foreach($all_users as  $user){
        
    //     foreach($districts as $district){

    //         if ($user->district_id == $district->id) {

    //             array_push($users,$user);

    //         }

    //     }
    // }

    // $all_users = User::with('district')->get();
    // $users = array();

    // foreach($all_users as  $user){
        
    //     if ($user->district->city_id == 3) {
    //         array_push($users,$user);
    //     }
    // }

        $this->city_id = 3;
    // $users = User::whereHas('district.city' ,function($query){
    //     $query->where('id' , $this->city_id);
    // })->get();


    // // dd($users);    
    // return view('users',['users' => $users]);



        // **********************************

        $users = User::all() ;
        foreach($users as $user){
        $user['birthday'] = Carbon::createFromFormat('Y-m-d H:i:s',$user['birthday'])->format('d-m-Y');          
        }

      return view('admin.users.index',['users' => $users]);


  } catch (Exception $e) {
      return $e;
  }

}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        try {

          $roles = Role::all();
          $cities = City::all();
          return view('admin.users.create',[
            'roles'       => $roles,
            'cities'      => $cities
        ]);

      } catch (Exception $e) {
          return $e;
      }
  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {

            $user_data = $request->all();
            $user_data['password'] = Hash::make($request->password);
            $user_data['api_token'] = Str::random(60);
            $user = User::create($user_data);
            return redirect("/users");

        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
      $users  = User::find($id);
      $roles  = Role::all();
      $cities = City::all();

      return view('admin.users.edit',[
        'users'  => $users ,
        'roles'  => $roles ,
        'cities' => $cities
    ]);
  }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
     try {

        $user = User::findOrFail($id);
        $user_data = $request->all();
        $user->fill($user_data)->save();
        return redirect("/users");
        
    } catch (Exception $e) {
        return $e;
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        User::destroy($id);
        return redirect("/users");
    }
}
