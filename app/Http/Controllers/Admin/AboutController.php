<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view('Admin.About.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.About.create');
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
            'about_title' => 'required',
            'about_desc' => 'required',
            'about_image' => 'required',
        ]);

        $about = new About();
        $about->about_title = $request->input('about_title');
        $about->about_desc = $request->input('about_desc');
        $about->about_image = $request->input('about_image');

        if ($request->hasfile('about_image')) {
            $img = $request->file('about_image');
            $name = $img->getClientOriginalName();
            $fileName = 'public/assets/img/' . $name;
            $img->move('public/assets/img', $fileName);
            $about->about_image = $fileName;
        }
        $about->save();
        return redirect('admin/about')->with('Insert_Message', 'Data has been Inserted Successfully !!');
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
        $about = About::find($id);
        return view('Admin.About.edit')->with('about', $about);
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
            'about_title' => 'required',
            'about_desc' => 'required',
            'about_image' => 'required',
        ]);

        $about = About::find($id);
        $about->about_title = $request->input('about_title');
        $about->about_desc = $request->input('about_desc');
        $about->about_image = $request->input('about_image');

        if ($request->hasfile('about_image')) {
            $img = $request->file('about_image');
            $name = $img->getClientOriginalName();
            $fileName = 'public/assets/img/' . $name;
            $img->move('public/assets/img', $fileName);
            $about->about_image = $fileName;
        }
        $about->save();
        return redirect('admin/about')->with('Updated_Message', 'Data has been Updated Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);
        $about->delete();

        return redirect('admin/about')->with('Deleted_Message', 'This data has been Deleted Successfully !!');
    }
}
