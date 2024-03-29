<?php

namespace App\Http\Controllers;

use App\Models\BaseInfo;
use App\Models\Projects;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $years = Projects::selectRaw('YEAR(created_at) as year')->distinct()->orderBy('year', 'desc')->get();
        $contacts = BaseInfo::first();
        $projects = Projects::all();

        return view('projects', compact('projects','years','contacts'));
    }

    public function index_filter($year)
    {
        $years = Projects::selectRaw('YEAR(created_at) as year')->distinct()->orderBy('year', 'desc')->get();
        $contacts = BaseInfo::first();
        $projects = Projects::whereYear('created_at', $year)->get();

        return view('projects', compact('projects','years','contacts'));
    }

    public function detail($id)
    {
        $project = Projects::find($id);
        $contacts = BaseInfo::first();
        $users = $project->users;
        //$user = User::where('id','=',$project->users()->pivot->user_id)->projects()->get();
        //dd($project);
        /* dd($user->users()->pivot->user_id,
        $user->users()->pivot->projects_id); */
        $reviews = Review::where('id', '=', $project->reviews_id)->get();

        return view('project_detail', compact('project', 'users', 'reviews','contacts'));
    }

    public function ShowTable()
    {
        $projects = Projects::withTrashed()->get();
        return view('projects_admin_list', compact('projects'));
    }

    public function AddPage()
    {
        $title = "Проект";
        $users = User::all();
        return view('AddPage', compact('title', 'users'));
    }

    public function AddProject(Request $request)
    {
        $validated = $request->validate([

            'title' => 'required',
            'anounce_image' => 'image',
            'details_image' => 'image',

        ]);
        
        $project = new Projects();

        $project->title = ($request->title);
        $project->anounce_text = ($request->anounce_text);
        if ($request->anounce_image == null) {
        } else {
            $project->anounce_image = $request->anounce_image->storeAs('folder', $request->anounce_image->getClientOriginalName(), 'public');
        }
        $project->details_text = ($request->details_text);
        if ($request->details_image == null) {
        } else {
            $project->details_image = $request->details_image->storeAs('folder', $request->details_image->getClientOriginalName(), 'public');
        }
        $project->sphere = ($request->sphere);
        $project->link = ($request->link);
        $project->SEOTitle = ($request->SEOTitle);
        $project->SEOKeys = ($request->SEOKeys);
        $project->SEODescription = ($request->SEODescription);
        $project->ALTAnounceImg = ($request->ALTAnounceImg);
        $project->TITLEAnounceImg = ($request->TITLEAnounceImg);
        $project->FileNameAnounceImg = ($request->FileNameAnounceImg);
        $project->ALTDetailsImg = ($request->ALTDetailsImg);
        $project->TITLEDetailsImg = ($request->TITLEDetailsImg);
        $project->FileNameDetailsImg = ($request->FileNameDetailsImg);
        $project->TAGS = ($request->TAGS);

        $project->save();
        $project->users()->attach($request->users_id);
        return redirect()->route('ShowTable');
    }

    public function EditPage($id)
    {
        $element = Projects::withTrashed()->find($id);

        $title = "Проект";
        $users = User::all();
        $selected_users = $element->users;
        return view('EditPage', compact('element', 'title', 'users', 'selected_users'));
    }

    public function UpdateProject(Request $request, $id)
    {
        $validated = $request->validate([

            'title' => 'required',
            'anounce_image' => 'image',
            'details_image' => 'image',

        ]);

        $project = Projects::find($id);

        $project->title = ($request->title);
        $project->anounce_text = ($request->anounce_text);
        if ($request->anounce_image == null) {
        } else {
            $project->anounce_image = $request->anounce_image->storeAs('folder', $request->anounce_image->getClientOriginalName(), 'public');
        }
        $project->details_text = ($request->details_text);
        if ($request->details_image == null) {
        } else {
            $project->details_image = $request->details_image->storeAs('folder', $request->details_image->getClientOriginalName(), 'public');
        }
        $project->sphere = ($request->sphere);
        $project->link = ($request->link);
        $project->SEOKeys = ($request->SEOKeys);
        $project->SEODescription = ($request->SEODescription);
        $project->ALTAnounceImg = ($request->ALTAnounceImg);
        $project->TITLEAnounceImg = ($request->TITLEAnounceImg);
        $project->FileNameAnounceImg = ($request->FileNameAnounceImg);
        $project->ALTDetailsImg = ($request->ALTDetailsImg);
        $project->TITLEDetailsImg = ($request->TITLEDetailsImg);
        $project->FileNameDetailsImg = ($request->FileNameDetailsImg);
        $project->TAGS = ($request->TAGS);

        $project->users()->sync($request->users_id);
        $project->save();

        return redirect()->route('ShowTable');
    }

    public function delete(Request $request)
    {
        $project = Projects::withTrashed()->find($request->id);
        if ($project->deleted_at == null) {
            $projects = Projects::find($request->id);
            $projects->delete();

            return redirect()->route('ShowTable');
        } else {
            return redirect()->route('ShowTable');
        }
    }

    public function restore(Request $request)
    {
        $project = Projects::withTrashed()->find($request->id);

        if ($project->deleted_at != null) {
            $projects = Projects::onlyTrashed()->find($request->id)->restore();

            return redirect()->route('ShowTable');
        } else {
            return redirect()->route('ShowTable');
        }
    }
}
