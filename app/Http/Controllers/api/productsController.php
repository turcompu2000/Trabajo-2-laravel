<?php

namespace App\Http\Controllers\api;

use App\Models\Products;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=DB::table('_products')
        ->get();
        return json_encode(['products'=>$products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Products();
        $product->id=$request->id;
        $product->name=$request->name;
        $product->price=$request->price;   
        $product->stock=$request->stock;   
        $product->categoria_id=$request->categoria_id; 
        $product->save();
        return json_encode(['product' => $product]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Products::find($id);
        return json_encode(['products'=>$products]);
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
        $products=Products::find($id);
        $products->id=$request->id;
        $products->name=$request->name;
        $products->price=$request->price;   
        $products->stock=$request->stock;   
        $products->categoria_id=$request->categoria_id;   
        $products->save();
        return json_encode(['products'=>$products]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Products::find($id);
        $product->delete();
        $products =DB::table('_products')
        ->get();
        return json_encode(['products' => $products, 'success'=>true]);
    }
}
