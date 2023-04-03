<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Icons;
use App\Models\Admin\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::with('icons')->get();
        return view('Admin.Services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Icons = Icons::all();
        return view('Admin.Services.create', compact('Icons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $services = new Services();
        $services->title = $request->input('title');
        $services->desc = $request->input('desc');
        $services->icon_id = $request->input('icon_id');
        $services->save();
        return redirect('admin/services')->with('Insert_Message', 'Data has been Inserted Successfully !!');
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
        $Icons = Icons::all();
        $services = Services::find($id);
        return view('Admin.Services.edit', compact('services', 'Icons'));
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
        $services = Services::find($id);
        $services->title = $request->input('title');
        $services->desc = $request->input('desc');
        $services->icon_id = $request->input('icon_id');

        $services->save();
        return redirect('admin/services')->with('Updated_Message', 'Data has been Updated Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = Services::find($id);
        $services->delete();

        return redirect('admin/services')->with('Deleted_Message', 'This data has been Deleted Successfully !!');
    }
}
