<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class categoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $categories=DB::table('categories')
    ->get();
    return json_encode(['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = new Categories();
        $categories->id=$request->id;
        $categories->name=$request->name;
        $categories->description=$request->description;   
        $categories->save();
        return json_encode(['categories' => $categories]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Categories::find($id);
        

        return json_encode(['categories'=>$categories]);
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
        $categories=Categories::find($id);
        $categories->id=$request->id;
        $categories->name=$request->name;
        $categories->description=$request->description;   
        $categories->save();
        return json_encode(['categories' => $categories]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categories::find($id);
        $categorie->delete();
        $categories =DB::table('categories')
        ->get();
        return json_encode(['categories' => $categories, 'success'=>true]);
    }
}
