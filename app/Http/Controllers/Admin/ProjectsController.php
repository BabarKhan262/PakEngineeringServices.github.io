<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Categories;
use App\Models\Admin\Projcets;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projcets::paginate(6);
        return view('Admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('Admin.projects.create', compact('categories'));
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
            'cat_id' => 'required',
            'title' => 'required',
            'desc' => 'required',
            'architects' => 'required',
            'location' => 'required',
            'area' => 'required',
            'manufactures' => 'required',
            'image' => 'required',
            // 'side_image_1' => 'required',
            // 'side_image_2' => 'required',
        ]);

        $projects = new Projcets();
        $projects->cat_id = $request->input('cat_id');
        $projects->title = $request->input('title');
        $projects->desc = $request->input('desc');
        $projects->architects = $request->input('architects');
        $projects->location = $request->input('location');
        $projects->area = $request->input('area');
        $projects->manufactures = $request->input('manufactures');
        $projects->image = $request->input('image');
        $projects->side_image_1 = $request->input('side_image_1');
        $projects->side_image_2 = $request->input('side_image_2');

        if ($request->hasfile('image')) {
            $img = $request->file('image');
            $name = $img->getClientOriginalName();
            $fileName = 'public/assets/img/' . $name;
            $img->move('public/assets/img', $fileName);
            $projects->image = $fileName;
        }
        if ($request->hasfile('side_image_1')) {
            $img_1 = $request->file('side_image_1');
            $name = $img_1->getClientOriginalName();
            $fileName = 'public/assets/img/' . $name;
            $img_1->move('public/assets/img', $fileName);
            $projects->side_image_1 = $fileName;
        }
        if ($request->hasfile('side_image_2')) {
            $img_2 = $request->file('side_image_2');
            $name = $img_2->getClientOriginalName();
            $fileName = 'public/assets/img/' . $name;
            $img_2->move('public/assets/img', $fileName);
            $projects->side_image_2 = $fileName;
        }
        $projects->save();
        return redirect('admin/projects')->with('Insert_Message', 'Data has been Inserted Successfully !!');
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
        $categories = Categories::all();
        $projects = Projcets::find($id);
        return view('Admin.projects.edit')->with(['categories' => $categories, 'projects' => $projects]);
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
            'cat_id' => 'required',
            'title' => 'required',
            'desc' => 'required',
            'architects' => 'required',
            'location' => 'required',
            'area' => 'required',
            'manufactures' => 'required',
            'image' => 'required',
        ]);

        $projects = Projcets::find($id);
        $projects->cat_id = $request->input('cat_id');
        $projects->title = $request->input('title');
        $projects->desc = $request->input('desc');
        $projects->architects = $request->input('architects');
        $projects->location = $request->input('location');
        $projects->area = $request->input('area');
        $projects->manufactures = $request->input('manufactures');
        $projects->image = $request->input('image');
        $projects->side_image_1 = $request->input('side_image_1');
        $projects->side_image_2 = $request->input('side_image_2');

        if ($request->hasfile('image')) {
            $img = $request->file('image');
            $name = $img->getClientOriginalName();
            $fileName = 'public/assets/img/' . $name;
            $img->move('public/assets/img', $fileName);
            $projects->image = $fileName;
        }
        if ($request->hasfile('side_image_1')) {
            $img_1 = $request->file('side_image_1');
            $name = $img_1->getClientOriginalName();
            $fileName = 'public/assets/img/' . $name;
            $img_1->move('public/assets/img', $fileName);
            $projects->side_image_1 = $fileName;
        }
        if ($request->hasfile('side_image_2')) {
            $img_2 = $request->file('side_image_2');
            $name = $img_2->getClientOriginalName();
            $fileName = 'public/assets/img/' . $name;
            $img_2->move('public/assets/img', $fileName);
            $projects->side_image_2 = $fileName;
        }
        $projects->save();
        return redirect('admin/projects')->with('Updated_Message', 'Data has been Updated Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projects = Projcets::find($id);
        $projects->delete();

        return redirect('admin/projects')->with('Deleted_Message', 'This data has been Deleted Successfully !!');
    }
}
