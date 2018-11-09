<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class TabelController extends Controller
{
	public function index ()	//index adalah nama method
    {

    	$data["city"]=city::limit(10)->orderBy('city_id','desc')->get();
    	return view('city',$data);

    }

    public function create(Request $request )
    {
    	$city = new city(); //city model
    	$city->city=$request->city;
    	$city->country_id=$request->country_id;
    	$city->save();

    	return redirect('city');
    }
    public function update(Request $request)
    {
    	$city = City::where('city','coutry_id')->first();
    	$city->city = $request->city;
		$city->country_id = $request->country_id;
		$city->save();
        return redirect('city');

 
    }

    public function delete($customer_id){

    	City::where('customer_id',$customer_id)->delete();
    	return "sukses";

    }



}
