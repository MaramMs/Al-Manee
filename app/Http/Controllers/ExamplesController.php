<?php

namespace App\Http\Controllers;

use App\Models\Example;
use App\Models\Service;
use Illuminate\Http\Request;

class ExamplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examples = Example::all();
        $services = Service::all();
         return view('admin.examplas.index' ,compact(['examples', 'services']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $examples = Example::all();
        $services = Service::all();
        return view('admin.examplas.create' , compact(['examples','services']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

        // Src -> setSrcAttribute($request->src);
        $request->validate([
            'content'=>'required  | string',
            'src' => 'required|image|mimes:jpg,png,jpeg,gif,svg',

        ]);
        Example::create($request->all());
        return redirect()->route('examples.index')->with('msg',' تمت اضافة  النموذج بنجاح')->with('type','success');
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
    public function edit(Example $example)
    {

        $services = Service::all();
        return view('admin.examplas.edit' , compact(['services','example']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Example $example)
    {
        $request->validate([
            'content'=>'required  | string',
            'src' => 'required|image|mimes:jpg,png,jpeg,gif,svg',

        ]);
        $example->update($request->all());
        return redirect()->route('examples.index')->with('msg',' تمت تعدبل  النموذج بنجاح')->with('type','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Example $example)
    {
        $example->delete();
        return redirect()->route('examples.index')->with('msg',' تم حذف الخدمة بنجاح')->with('type','info');
    }


}
