<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use App\Models\City;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $districts = District::all();
        return view('admin.districts.index',['districts' => $districts]);
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
          $cities= City::all();
          return view('admin.districts.create',['cities' => $cities]);

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

            $district_data = $request->all();
            $district = District::create($district_data);
            return redirect("/districts");

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
        $cities = City::all();
        $districts = District::find($id);

        return view('admin.districts.edit',[
            'districts' => $districts ,
            'cities'    => $cities
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

        $district = District::findOrFail($id);
        $district_data = $request->all();
        $district->fill($district_data)->save();
        return redirect("/districts");
        
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
        District::destroy($id);
        return redirect("/districts");
    }

    //Ajax
    public function districtsByCity(Request $request){

        try {

            $districts = District::where('city_id' , $request->city_id)->get();

            return response()->json(['status' => 200 , 'districts' => $districts]);


        } catch (Exception $e) {
            return $e;
        }
        
    }
}
