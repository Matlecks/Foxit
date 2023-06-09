<?php

namespace App\Http\Controllers;

use App\Models\BaseInfo;
use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Posts;
use App\Models\Projects;
use App\Models\Review;
use App\Models\User;

class IndexPageController extends Controller
{
    public function index()
    {
        $services = Services::limit(4)->get();

        $posts = Posts::limit(4)->get();

        $users = User::where('role','=','Admin')->limit(4)->get();

        $review = Review::where('status','=','public')->limit(4)->get();

        $projects = Projects::limit(3)->get();

        $contacts = BaseInfo::first();

        return view('content',compact('services','posts','users','review','projects','contacts'));
    }

    public function show_company_about()
    {
        $contacts = BaseInfo::first();

        return view('about',compact('contacts'));
    }

    public function show_contacts()
    {
        $contacts = BaseInfo::first();

        return view('contacts',compact('contacts'));
    }

    public function show_cabinet()
    {
        $contacts = BaseInfo::first();

        return view('cabinet',compact('contacts'));
    }
}
