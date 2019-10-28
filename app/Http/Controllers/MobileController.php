<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mobileform;

class MobileController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
           'mobilebrand'=>'required',
           'imeinumber'=>'required',
           'modelnumber'=>'required',
           'purchasingdate'=>'required',
           'purchasingfrom'=>'required',
           'price'=>'required',
           'uploadbill'=>'required',
           'uploadfront'=>'required',
           'uploadback'=>'required',
           'uploadimei'=>'required'
           

           
        ));

        
      $reg=new Mobileform;
        $reg->mobilebrand =$request->mobilebrand;
        $reg->imeinumber = $request->imeinumber;
        $reg->modelnumber = $request->modelnumber;
        $reg->purchasingdate = $request->purchasingdate;
        $reg->purchasingfrom =$request->purchasingfrom;
        $reg->price = $request->price;
        $reg->uploadbill = $request->uploadbill;
        $reg->uploadfront = $request->uploadfront;
        $reg->uploadback = $request->uploadback;
        $reg->uploadimei = $request->uploadimei;
    
       $reg->save();
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
