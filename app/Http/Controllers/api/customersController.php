<?php

namespace App\Http\Controllers\api;

use App\Models\Customers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class customersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers=DB::table('customers')
        ->get();
        return json_encode(['customers'=>$customers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer=new Customers();
        $customer->id=$request->id;
        $customer->document_number=$request->document_number;
        $customer->first_name=$request->first_name;   
        $customer->last_name=$request->last_name;   
        $customer->address=$request->address;   
        $customer->birthday=$request->birthday;   
        $customer->phone_number=$request->phone_number;   
        $customer->email=$request->email;   
        $customer->save();
        return json_encode(['customer'=>$customer]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $customers = Customers::find($id);
       return json_encode(['customers'=>$customers]);
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
        $customers =Customers::find($id);
        $customers->document_number=$request->document_number;
        $customers->first_name=$request->first_name;   
        $customers->last_name=$request->last_name;   
        $customers->address=$request->address;   
        $customers->birthday=$request->birthday;   
        $customers->phone_number=$request->phone_number;   
        $customers->email=$request->email;   
        $customers->save();
        return json_encode(['customers' => $customers]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customers::find($id);
        $customer->delete();
        $customers =DB::table('customers')
        ->get();
        return json_encode(['customers' => $customers, 'success'=>true]);
    }
}
