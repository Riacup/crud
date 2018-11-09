<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
    	$nama = 'Guten Morgen';
    
    	return view('hello',compact('nama'));
    }

    public function blank(){
    	return view('blank');
    }
}
