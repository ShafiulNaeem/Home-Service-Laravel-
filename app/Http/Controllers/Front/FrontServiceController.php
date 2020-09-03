<?php

namespace App\Http\Controllers\Front;

use App\Order;
use App\Service;
use App\ServiceProvider;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\Front\DB;
use Illuminate\Support\Facades\DB;


class FrontServiceController extends Controller
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
        $this->validate($request, array(
            'user_name' => 'required',
            'user_email' => 'required',
            'pro_name' => 'required',
            'pro_email' => 'required',
            'pro_wages' => 'required',
            'pro_adress' => 'required',
            'pro_phone' => 'required',
            'pro_service' => 'required',
        ));
        //save the data to the database
        $orders = new Order();
        $orders->user_name = $request->user_name;
        $orders->user_email = $request->user_email;
        $orders->pro_name = $request->pro_name;
        $orders->pro_email = $request->pro_email;
        $orders->pro_wages = $request->pro_wages;
        $orders->pro_adress = $request->pro_adress;
        $orders->pro_phone = $request->pro_phone;
        $orders->pro_service = $request->pro_service;

        $orders->save();
        return view('front.allDetails.order');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usrprovider = ServiceProvider::find($id);
        //$usrprovider->load('users');
        return view('front.allDetails.details',compact('usrprovider'));
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
