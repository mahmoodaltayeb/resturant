<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meal;
use App\Models\MealeImage;
use App\Models\Category;


class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      $meals = Meal::all();
      return view('admin.meals.index',['meals' => $meals]);

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

          $categories= Category::all();      
          return view('admin.meals.create',['categories'=> $categories]);

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

            // meal data    
            $meal_data = $request->all();
            $meal = Meal::create($meal_data);

            // meal images
            if ($request->file('paths')) {

                foreach($request->file('paths') as $file){
                    $filename= date('YmdHi').$file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    $path = $file->storeAs('public/uploads', $filename);
                    $image_data['meal_id'] = $meal->id;
                    $image_data['path'] = $filename;
                    $image = MealeImage::create($image_data);
                }
            }
            return redirect("/meals");

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
        $categories= Category::all();      
        $meals = Meal::find($id);

        return view('admin.meals.edit',[
            'meals'      => $meals,
            'categories' => $categories
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
            //find meal
            $meal = Meal::findOrFail($id);
            $meal_data = $request->all();
            $meal->fill($meal_data)->save();
            return redirect("/meals");

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
        Meal::destroy($id);
        return redirect("/meals");
    }
}