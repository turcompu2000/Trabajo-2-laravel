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
        $categorie = new Categories();
        $categorie->id=$request->id;
        $categorie->name=$request->name;
        $categorie->description=$request->description;   
        $categorie->save();
        return json_encode(['categorie' => $categorie]);
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
        $categories->name=$request->name;
        $categories->description=$request->description;   
        $categories->save();
        return json_encode(['categories'=>$categories]);
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
