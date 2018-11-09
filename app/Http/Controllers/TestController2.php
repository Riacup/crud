<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\Customer;


class TestController2 extends Controller
{
    public function create(Request $request){

    //dd($request->first_name);

    //query insert dengan eloquent
    $c = new \App\Customer();
    $c -> store_id = $request->store_id;
    $c -> first_name = $request->first_name;
    $c -> last_name = $request->last_name;
    $c -> address_id = $request->address_id;
    $c -> active = $request->active;
    $c -> save ();

    return "sukses";

}

public function delete($customer_id){
	Customer::where('customer_id',$customer_id)->
		delete();

		return "sukses";
}

public function join_store_to_customer()
{
	//join pertama
	$store = Store::join('customer','customer_id','='
		,'customer_id')
		-> where('store.store_id',1)
		-> limit(10)
		-> get();

		//dd($store);

		//join ke dua
		$store = Store::where('store_id');
		dd($store);
}
	public function index(Request $request){

		dd($request->first_name);

			return "sukses";
}
}
