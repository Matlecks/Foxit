<?php

namespace App\Http\Controllers;

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

        $users = User::limit(4)->get();

        $review = Review::limit(4)->get();

        $projects = Projects::limit(4)->get();

        return view('content',compact('services','posts','users','review','projects'));
    }
}
