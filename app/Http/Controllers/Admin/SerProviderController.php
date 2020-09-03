<?php

namespace App\Http\Controllers\Admin;
use Image;
use App\Service;
use App\ServiceProvider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SerProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
   {
       $serviceprovider = ServiceProvider::all();
       return view('admin.service_provider.index',compact('serviceprovider'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        return view('admin.service_provider.create',compact('services'));
       // return view('admin.service.create');
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
            'name' => 'required',
            'email' => 'required',
            'adress' => 'required',
            'wages' => 'required',
            'phone' => 'required',
            'service_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));
        //save the data to the database
        $serviceprovider = new ServiceProvider();
        $serviceprovider->name = $request->name;
        $serviceprovider->email = $request->email;
        $serviceprovider->phone = $request->phone;
        $serviceprovider->adress = $request->adress;
        $serviceprovider->wages = $request->wages;
        $serviceprovider->service_id = $request->service_id;

        if($request->hasFile('image')){
            $image = request()->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $filename);
            $serviceprovider->image = $filename;
            $serviceprovider->save();
        };

        $serviceprovider->save();
        return redirect()->back()->with('status','Added service provider data Successfully...');
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
        $serviceprovider = ServiceProvider::find($id);
        return view('admin.service_provider.edit',compact('serviceprovider','id'));
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
            'name' => 'required',
            'email' => 'required',
            'adress' => 'required',
            'wages' => 'required',
            'phone' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));
        //save the data to the database
        $serviceprovider = ServiceProvider::find($id);
        $serviceprovider->name = $request->name;
        $serviceprovider->email = $request->email;
        $serviceprovider->phone = $request->phone;
        $serviceprovider->adress = $request->adress;
        $serviceprovider->wages = $request->wages;

        if($request->hasFile('image')){
            $image = request()->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $filename);
            $serviceprovider->image = $filename;
            $serviceprovider->save();
        };

        $serviceprovider->save();
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
        $serviceprovider = ServiceProvider::find($id);
        $serviceprovider->delete();
        return redirect()->back()->with('deleted','You fired!!!! because you num one Bainchod...');
    }
}
