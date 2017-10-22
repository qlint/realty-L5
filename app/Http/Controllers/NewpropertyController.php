<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newproperty;

class NewpropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('new.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* validate -> store -> redirect */
        /*the validate*/
        /*$this->validate($request, array(
            'input_name' => 'required',
            'input_name2' => 'required',
            'input_name3' => 'required',
            'input_name4' => 'required',
            'input_name5' => 'required'
        ));*/
        

        /* $model_object_instance = new model; */
        $newproperty = new Newproperty;
        /* $model_object_instance ->db_column = $request->name; */
        $newproperty ->property_title = $request->property_title;
        $newproperty ->property_price = $request->property_price;
        $newproperty ->property_descr = $request->property_descr;
        $newproperty ->property_town = $request->property_town;
        $newproperty ->property_location = $request->property_location;
        $newproperty ->property_type = $request->property_type;
        $newproperty ->property_status = $request->property_status;
        $newproperty ->bedroom = $request->bedroom;
        $newproperty ->bathroom = $request->bathroom;
        $newproperty ->garage = $request->garage;
        $newproperty ->area = $request->area;
        $newproperty ->property_image = $request->file('property_image')->move('img/uploads');
        $newproperty ->air_conditioning = $request->air_conditioning;
        $newproperty ->bedding = $request->bedding;
        $newproperty ->balcony = $request->balcony;
        $newproperty ->cable_tv = $request->cable_tv;
        $newproperty ->internet = $request->internet;
        $newproperty ->parking = $request->parking;
        $newproperty ->lift = $request->lift;
        $newproperty ->pool = $request->pool;
        $newproperty ->dishwasher = $request->dishwasher;
        $newproperty ->furnished = $request->furnished;

        $newproperty->save();
        /*redirecting to the content's particular page*/
        return redirect()->route('new.show', $newproperty->id);

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
        $newproperty = Newproperty::find($id);
        return view('new.show')->with('newproperty', $newproperty);
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
