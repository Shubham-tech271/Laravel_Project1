<?php

namespace App\Http\Controllers;

//this is booking controller Via Admin
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\RoomType;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings=Booking::all();
        return view('booking.index',['data'=>$bookings]);
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers=Customer::all();
        $roomtypes=RoomType::all();
        return view('booking.create',['data'=>$customers,'roomtypes'=>$roomtypes]);
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
            'customer_id'=>'required',
            'room_id'=>'required',
            'checkin_date'=>'required',
        ]);

        

        if($request->ref=='front'){
            $data= new Booking;
            $data-> customer_id = $request->customer_id;
            $data-> room_id = $request->room_id;
            $data-> checkin_date = $request->checkin_date;
            $data-> total_members= $request->total_members;
        
            $data->save();
            return redirect('book/customerbooking')->with('success','Booking has been created.');
        }else{
            $data= new Booking;
            $data-> customer_id = $request->customer_id;
            $data-> room_id = $request->room_id;
            $data-> checkin_date = $request->checkin_date;
            $data-> total_members= $request->total_members;
            if($request->ref=='front'){
                $data->ref='front';
            }else{
                $data->ref='admin';
            }
        
            $data->save();
            return redirect('admin/booking/create')->with('success','Data added.');
        }
        

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
        return redirect('book/customerbooking')->with('success','Booking has been created.');//
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

    //check Available rooms
    function available_rooms(Request $request,$checkin_date){
        $arooms=DB::SELECT("SELECT * FROM rooms WHERE id NOT IN (SELECT room_id FROM bookings WHERE '$checkin_date' >= checkin_date)");

        $data=[];
        foreach($arooms as $room){
            $roomTypes=RoomType::find($room->room_type_id);
            $data[]=['room'=>$room,'roomtype'=>$roomTypes];
        }

        return response()->json(['data'=>$data]);
    }

    public function front_booking()
    {
        $customers=Customer::all();
        $roomtypes=RoomType::all();
        return view('front-booking',['data'=>$customers,'roomtypes'=>$roomtypes]);
        
    }


}

