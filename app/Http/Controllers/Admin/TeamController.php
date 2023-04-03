<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourTeam = Team::all();
        return view('Admin.Team.index', compact('ourTeam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Team.create');
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
            'designation' => 'required',
            'image' => 'required',
        ]);

        $ourTeam = new Team();
        $ourTeam->name = $request->input('name');
        $ourTeam->designation = $request->input('designation');
        $ourTeam->image = $request->input('image');

        if ($request->hasfile('image')) {
            $img = $request->file('image');
            $name = $img->getClientOriginalName();
            $fileName = 'public/assets/img/' . $name;
            $img->move('public/assets/img', $fileName);
            $ourTeam->image = $fileName;
        }
        $ourTeam->save();
        return redirect('admin/team')->with('Insert_Message', 'Data has been Inserted Successfully !!');
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
        $ourTeam = Team::find($id);
        return view('Admin.Team.edit')->with('ourTeam', $ourTeam);
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
            'designation' => 'required',
            'image' => 'required',
        ]);

        $ourTeam = Team::find($id);
        $ourTeam->name = $request->input('name');
        $ourTeam->designation = $request->input('designation');
        $ourTeam->image = $request->input('image');

        if ($request->hasfile('image')) {
            $img = $request->file('image');
            $name = $img->getClientOriginalName();
            $fileName = 'public/assets/img/' . $name;
            $img->move('public/assets/img', $fileName);
            $ourTeam->image = $fileName;
        }
        $ourTeam->save();
        return redirect('admin/team')->with('Updated_Message', 'Data has been Updated Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ourTeam = Team::find($id);
        $ourTeam->delete();

        return redirect('admin/team')->with('Deleted_Message', 'This data has been Deleted Successfully !!');
    }
}
