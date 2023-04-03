<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin\Categories;
use App\Models\Admin\Projcets;
use App\Models\Admin\Services;
use App\Models\Admin\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function adminLogin()
    {
        return view('Admin.login');
    }

    public function checkAdmin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ])) {
            $request->session()->regenerate();
            return redirect('/admin');
        } else {
            return back()->withErrors(['message' => 'Invalid email or password']);
        }
    }

    public function index()
    {
        // Total Projcets
        $projects = Projcets::all();
        $totalProjcets = $projects->count();

        // Total Services
        $services = Services::all();
        $totalServices = $services->count();

        // Total Categories
        $category = Categories::all();
        $totalCategories = $category->count();

        $ourTeam = Team::all();
        $totalTeam = $ourTeam->count();

        return view('Admin.admin', compact(
            'totalProjcets',
            'totalServices',
            'totalCategories',
            'totalTeam',
        ));
        // return view('Admin.admin');
    }

    public function logOut()
    {
        Session::flush();
        Auth::logout();
        return redirect('/login-admin');
    }
}
