<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SeoController extends Controller
{
    public function seo_admin_index()
    {
        return view('seo_admin_index');
    }

    public function show_robots()
    {
        $content = Storage::disk('root')->get('robots.txt');
        return view('robots_admin_index', compact('content'));
    }

    public function save(Request $request)
    {
        $content = $request->input('content');
        Storage::disk('root')->put('robots.txt', $content);

        return redirect()->route('ShowRobots')->with('success', 'Robots.txt file has been updated.');
    }
}
