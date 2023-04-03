<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('Admin.Testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Testimonial.create');
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
            'name' => 'required',
            'desc' => 'required',
            'image' => 'required',
        ]);

        $testimonials = new Testimonial();
        $testimonials->name = $request->input('name');
        $testimonials->desc = $request->input('desc');
        $testimonials->image = $request->input('image');

        if ($request->hasfile('image')) {
            $img = $request->file('image');
            $name = $img->getClientOriginalName();
            $fileName = 'public/assets/img/' . $name;
            $img->move('public/assets/img', $fileName);
            $testimonials->image = $fileName;
        }
        $testimonials->save();
        return redirect('admin/testimonials')->with('Insert_Message', 'Data has been Inserted Successfully !!');
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
        $testimonials = Testimonial::find($id);
        return view('Admin.Testimonial.edit')->with('testimonials', $testimonials);
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
            'name' => 'required',
            'desc' => 'required',
            'image' => 'required',
        ]);

        $testimonials = Testimonial::find($id);
        $testimonials->name = $request->input('name');
        $testimonials->desc = $request->input('desc');
        $testimonials->image = $request->input('image');

        if ($request->hasfile('image')) {
            $img = $request->file('image');
            $name = $img->getClientOriginalName();
            $fileName = 'public/assets/img/' . $name;
            $img->move('public/assets/img', $fileName);
            $testimonials->image = $fileName;
        }
        $testimonials->save();
        return redirect('admin/testimonials')->with('Updated_Message', 'Data has been Updated Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonials = Testimonial::find($id);
        $testimonials->delete();

        return redirect('admin/testimonials')->with('Deleted_Message', 'This data has been Deleted Successfully !!');
    }
}
