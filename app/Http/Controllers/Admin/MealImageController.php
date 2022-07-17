<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MealeImage;
use App\Models\Meal;

class MealImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      $meal_images = MealeImage::all();
      return view('admin.meal_images.index',['meal_images' =>$meal_images]);
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

            $meals= Meal::all();
            return view('admin.meal_images.create',['meals' => $meals]);

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
        $meal_image= new MealeImage();
        $meal_image = $request->all();
        if($request->file('path')){
            $file= $request->file('path');
            // generate a new filename. getClientOriginalExtension() for the file extension
            $filename= date('YmdHi').$file->getClientOriginalName();
            $path = $file->storeAs('public/uploads', $filename);
            $meal_image['path'] = $filename;          
        }
        //$meal_image->save();
        $image = MealeImage::create($meal_image);
        return redirect("/mealimages");
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
    }
}
