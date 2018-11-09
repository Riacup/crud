<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelCity;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citys = ModelCity::paginate(10);
        return view('index', compact('citys'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'city'=>'required',
        'country_id'=> 'required'
      ]);
      $citys = new ModelCity([
        'city' => $request->get('city'),
        'country_id'=> $request->get('country_id')
      ]);
      $citys->save();
      return redirect('citys')->with('success', 'City has been added');

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
        $city = ModelCity::find($id);
        return view('edit',compact('city'));
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
        $request->validate([
            'city'=>'required',
            'country_id'=>'required',
        ]);

        $city = ModelCity::find($id);
        $city->city = $request->get('city');
        $city->country_id = $request->get('country_id');
        $city->save();

        return redirect('/citys')->with('success', 'Data has been updated');
       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = ModelCity::find($id);
        $city->delete();

        return redirect('/cityss')->with(['error' => 'Data has been deleted Successfully']);
    }
}
