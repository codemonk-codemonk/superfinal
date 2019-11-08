<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mobileform;

use App\User;

use App\Payment;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;




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
           'price'=>'required',
           'amounttobepaid' => 'required',
           'amountidv' => 'required',
           'uploadbill'=>'required',
           'uploadfront'=>'required',
           'uploadback'=>'required',
           'uploadimei'=>'required'



        ));

        $curr  = auth()->user();


      $reg=new Mobileform;

        $reg->aadharno=$curr->aadharno;
        $reg->mobilebrand =$request->mobilebrand;
        $reg->imeinumber = $request->imeinumber;
        $reg->modelnumber = $request->modelnumber;
        $reg->purchasingdate = $request->purchasingdate;
        $reg->price = $request->price;
        $reg->amounttobepaid = $request->amounttobepaid;
        $reg->amountidv = $request->amountidv;
        $reg->uploadbill = $request->uploadbill;
        $reg->uploadfront = $request->uploadfront;
        $reg->uploadback = $request->uploadback;
        $reg->uploadimei = $request->uploadimei;

       $reg->save();


       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "superfinal";

       $link = mysqli_connect($servername, $username, $password, $dbname);
       if($link === false){
           die("ERROR: Could not connect. " . mysqli_connect_error());
       }

       $pretwo = "INSERT INTO policy (type,aadharno) VALUES ('3','$curr->aadharno')";
       mysqli_query($link, $pretwo);
       mysqli_close($link);


         return redirect('/callmobilecheckout');


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
