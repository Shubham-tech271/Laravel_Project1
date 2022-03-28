<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=customer::all();
        return view('customer.index',['data'=>$data]);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');//
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
            'full_name'=>'required',
            'mobile'=>'required',
            'email'=>'required|email',
        ]);

        $data= new customer;
        $data-> full_name = $request->full_name;
        $data-> mobile = $request->mobile;
        $data-> email = $request->email;
        $data->save();

        return redirect('admin/customer/create')->with('success','Data added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $data=customer::find($id);
        return view('customer.show',['data'=>$data]);//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data=customer::find($id);
        return view('customer.edit',['data'=>$data]);

        
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
            'full_name'=>'required',
            'mobile'=>'required',
            'email'=>'required|email',
        ]);
        
        $data=Customer::find($id);
        $data-> full_name = $request->full_name;
        $data-> mobile = $request->mobile;
        $data-> email = $request->email;
        $data->save();

        return redirect('admin/customer/'.$id.'/edit')->with('success','Data has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        customer::where('id',$id)->delete();
        return redirect('admin/customer')->with('success','Data has been deleted.');
    }
}
 