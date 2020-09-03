<?php

namespace App\Http\Controllers\Admin;

use Image;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
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
            'service_info' => 'required',
            'service_type' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));
        //save the data to the database
        $services = new Service();
        $services->service_type = $request->service_type;
        $services->service_info = $request->service_info;
        $services->labour_id = $request->labour_id;

        if($request->hasFile('image')){
            $image = request()->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $filename);
            $services->image = $filename;
            $services->save();
        };

        $services->save();

        return redirect()->back()->with('status','Added Service Successfully..');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
        $services = Service::find($id);
        return view('admin.service.edit',compact('services','id'));
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
        $this->validate($request, array(
            'service_info' => 'required',
            'service_type' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));
        $services = Service::find($id);
        $services->service_type = $request->service_type;
        $services->service_info = $request->service_info;
        $services->labour_id = $request->labour_id;

        if($request->hasFile('image')){
            $image = request()->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $filename);
            $services->image = $filename;
            $services->save();
        };

        $services->save();
        return redirect()->back()->with('status','Updated Successfully..');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = Service::find($id);
        $services->delete();
        return redirect()->back()->with('deleted','Deleted Successfully..');
    }
}
