<?php

namespace App\Http\Controllers;
use App\creditcard;
use App\status;
use Illuminate\Http\Request;
use  App\order;
use Illuminate\Support\Facades\Auth;
use DB;
class TScontroller extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//
//    }

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
    public function show()
    {
        $order = order::all();
        return view('showall')->with('order',$order);
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

    public function id($id){
            if($id>9){
                return '0'.$id;
            }else{
                return $id;
            }
    }

    public function postOrder(Request $request){
        $order = [
            'order_id'=>'0'.$this->id(Auth::user()->id) .abs( crc32( uniqid() ) ),
            'user_id' => Auth::user()->id ,
            'labor' =>  $request->labor,
            'product' =>  $request->product,
            'start_county' =>  $request->start_county,
            'start_zone' =>  $request->start_zone,
            'date_start' =>  $request->date_start,
            'namestart' =>  $request->namestart,
            'telstart' =>  $request->telstart,
            'destination_county' =>   $request->destination_county,
            'destination_zone' =>   $request->destination_zone,
            'namedestination' =>  $request->namedestination,
            'teldestination' => $request->teldestination,
            'weight' => $request->weight,
            'wide' => $request->wide,
            'long' => $request->long,
            'high' => $request->high,
            'price' => '0'
            ,];
        // 'weight','wide','long','high'
        //'labor','product','start_county','start_zone','date_start','namestart','telstart','destination_county','destination_zone','namedestination','teldestination'
        order::create($order);

        $status = [
            'user_id' =>  Auth::user()->id ,
            'track_id' => 'LG'.abs( crc32( uniqid() ) ),
            'order_id' => $order['order_id'],
            'status' =>   'รอดำเนินการ',
            'car' => '-',
            'start' => $request->start_zone.','.$request->start_county,
            'destination' => $request->destination_zone.','.$request->destination_county,
        ];
        status::create($status);
        return redirect('/shipment');
     ;
    }

    public function showushipment(){
        if(empty((Auth::user()->id ))){
            return view('auth/login');
        }
        $status  = status::where('user_id',Auth::user()->id)
                    ->get();
        return view('shipment')
            ->with('status',$status);
    }
    public function check(){
        $credit  = creditcard::where('user_id',Auth::user()->id)
            ->count();
        if ($credit != 0 ) {
            DB::table('status')
                ->where('user_id',Auth::user()->id)
                ->update(['status' => 'กำลังจัดส่ง']);
            return redirect('/finish');
        }
        else  {

            return redirect('/payment');
        }
    }
    public function addcredit(Request $request){
        $credit = [
            'user_id' => Auth::user()->id ,
            'credit_id' => $request->creditID,
            'exp_date'=>   $request->cc_exp_mo.'/'.$request->cc_exp_yr,
            'cvv' =>  $request->cvv,
            'name' =>  $request->name,
            'lastname'=>  $request->lastname
            ,];
        creditcard::create($credit);
        return redirect('/shipment');
    }
    function index()
    {
        $data = DB::table('orders')
            ->select(
                DB::raw('product as product'),
                DB::raw('count(*) as number'))
            ->groupBy('product')
            ->get();
        $array[] = ['product', 'number'];
        foreach($data as $key => $value)
        {
            $array[++$key] = [$value->product, $value->number];
        }
        return view('showG')
            ->with('product', json_encode($array));
    }

    function index01()
    {
        $data = DB::table('orders')
            ->select(
                DB::raw('destination_county as destination_county'),
                DB::raw('count(*) as number'))
            ->groupBy('destination_county')
            ->get();
        $array[] = ['destination_county', 'number'];
        foreach($data as $key => $value)
        {
            $array[++$key] = [$value->destination_county, $value->number];
        }
        return view('showGT')
            ->with('destination_county', json_encode($array));
    }
    public function showstatus(){
        $status  = status::all();
        return view('showstatusall')
            ->with('status',$status);
    }
    function index02()
    {
        $data = DB::table('status')
            ->select(
                DB::raw('status as status'),
                DB::raw('count(*) as number'))
            ->groupBy('status')
            ->get();
        $array[] = ['status', 'number'];
        foreach($data as $key => $value)
        {
            $array[++$key] = [$value->status, $value->number];
        }
        return view('showstatusg')
            ->with('status', json_encode($array));
    }

    public function updateorder(Request $request){
        $order  =DB::table('orders')->where('order_id',$request-> order_id)->update(array(
            'order_id' =>  $request->order_id,
            'user_id' =>$request->user_id,
            'car' =>  $request->type,
            'price' => $request->price,
        ));
    }

                /**
     *
     */


}
