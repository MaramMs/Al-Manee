<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
       return view('Admin.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.services.create');
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
            'brief'=>'required |string',
            'title'=>'required  | string',
            'content'=>'required | string',
            'features' => 'required |string',
            'img' => 'required|image|mimes:jpg,png,jpeg,gif,svg',

        ]);
        Service::create($request->all());
        return redirect()->route('services.index')->with('msg',' تمت اضافة الخدمة بنجاح')->with('type','success');
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
    public function edit(Service $service)
    {
        return view('Admin.services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        // $services = Service::all();
        $request->validate([
            'brief'=>'required |string',
            'title'=>'required  | string',
            'content'=>'required | string',
            'features' => 'required |string'

        ]);
        $service->update($request->all());
        return redirect()->route('services.index')->with('msg',' تم تعديل  الخدمة بنجاح')->with('type','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('msg',' تم حذف الخدمة بنجاح')->with('type','info');
    }
}
