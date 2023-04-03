<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin\About;
use App\Models\Admin\Contact;
use App\Models\Admin\HeaderLogo;
use App\Models\Admin\Projcets;
use App\Models\Admin\Services;
use App\Models\Admin\Team;
use App\Models\Admin\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $logo = HeaderLogo::first();
        $abouts = About::first();
        $services = Services::with('icons')->get();
        $projcets = Projcets::with('categories')->get();
        $testimonials = Testimonial::all()->take(4);
        $contacts = Contact::first();
        return view('Home.home', compact(
            'logo',
            'abouts',
            'services',
            'projcets',
            'testimonials',
            'contacts',
        ));
    }

    public function aboutUS()
    {
        $logo = HeaderLogo::first();
        $abouts = About::all();
        $allServices = Services::with('icons')->get();
        $contacts = Contact::first();
        $testimonials = Testimonial::all()->take(4);
        return view('Home.about', compact(
            'logo',
            'abouts',
            'allServices',
            'contacts',
            'testimonials',
        ));
    }


    public function allServices()
    {
        $logo = HeaderLogo::first();
        $allServices = Services::with('icons')->get();
        $contacts = Contact::first();
        $testimonials = Testimonial::all()->take(4);
        return view('Home.services', compact(
            'logo',
            'allServices',
            'contacts',
            'testimonials',
        ));
    }

    public function allProjects()
    {
        $logo = HeaderLogo::first();
        $allProjcets = Projcets::with('categories')->get();
        $contacts = Contact::first();
        return view('Home.projects', compact(
            'logo',
            'allProjcets',
            'contacts',
        ));
    }

    public function projectSingle($id)
    {
        $logo = HeaderLogo::first();
        $singleProjcets = Projcets::find($id);
        $contacts = Contact::first();
        return view('Home.project-single', compact(
            'logo',
            'singleProjcets',
            'contacts',
        ));
    }

    public function ourTeam()
    {
        $logo = HeaderLogo::first();
        $ourTeam = Team::all();
        // $contactUS = Contact::all();
        $contacts = Contact::first();
        return view('Home.team', compact(
            'logo',
            'ourTeam',
            // 'contactUS',
            'contacts',
        ));
    }

    public function contactUS()
    {
        $logo = HeaderLogo::first();
        $allProjcets = Projcets::with('categories')->get();
        $contactUS = Contact::all();
        $contacts = Contact::first();
        return view('Home.contact', compact(
            'logo',
            'allProjcets',
            'contactUS',
            'contacts',
        ));
    }
}
