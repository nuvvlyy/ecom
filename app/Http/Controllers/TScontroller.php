<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  App\order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class TScontroller extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        //
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


    /**
     * @param Request $request
     */

    public function type_car($car){
        $car1='กระบะ 4 ล้อตะแกรงเหล็ก';
        $car2='กระบะ 4 ล้อหลังคาคู้ทึบ';
        $car3='บรรทุก 6 ล้อคอนเทนเนอร์';
         $car4='บรรทุก 6 ล้อตะแกรงไม้';
         if($car1===$car){
             return 'FI';
         }else if($car===$car2){
             return 'FR';
         }else if($car===$car3){
             return 'ST';
         }else{
             return 'FW';
         }
    }
    public function postOrder(Request $request){
        $order = [
            'order_id'=>'FER0'.abs( crc32( uniqid() ) ),
            'user_id' => Auth::user()->id ,
            'car' =>  '1',
            'labor' =>  $request->labor,
            'product' =>  $request->product,
            'start' =>  $request->start,
            'namestart' =>  $request->namestart,
            'destination' =>   $request->destination,
            'namedestination' =>  $request->namedestination,
            'price' => $request->price
            ,];
        order::create($order);
        echo 'happy';
     ;
    }

    /**
     *
     */


}
