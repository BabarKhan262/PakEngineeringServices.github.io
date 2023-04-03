<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\HeaderLogo;

class HomeLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headerLogo = HeaderLogo::all();
        return view('Admin.Logo.index', compact('headerLogo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Logo.create');
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

            'logo' => 'required',
        ]);

        $headerLogo = new HeaderLogo();
        $headerLogo->logo = $request->input('logo');

        if ($request->hasfile('logo')) {
            $img = $request->file('logo');
            $name = $img->getClientOriginalName();
            $fileName = 'public/assets/img/' . $name;
            $img->move('public/assets/img', $fileName);
            $headerLogo->logo = $fileName;
        }
        $headerLogo->save();
        return redirect('admin/logo')->with('Insert_Message', 'Data has been Inserted Successfully !!');
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
        $headerLogo = HeaderLogo::find($id);
        return view('Admin.Logo.edit')->with('headerLogo', $headerLogo);
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

            'logo' => 'required',
        ]);

        $headerLogo = HeaderLogo::find($id);
        $headerLogo->logo = $request->input('logo');

        if ($request->hasfile('logo')) {
            $img = $request->file('logo');
            $name = $img->getClientOriginalName();
            $fileName = 'public/assets/img/' . $name;
            $img->move('public/assets/img', $fileName);
            $headerLogo->logo = $fileName;
        }
        $headerLogo->save();
        return redirect('admin/logo')->with('Updated_Message', 'Data has been Updated Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $headerLogo = HeaderLogo::find($id);
        $headerLogo->delete();

        return redirect('admin/logo')->with('Deleted_Message', 'This data has been Deleted Successfully !!');
    }
}
