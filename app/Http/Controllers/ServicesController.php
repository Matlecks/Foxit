<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Services_tree;
use App\Models\User;
use App\Models\Review;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Services::all();
        //$posts = Post::where('User_id', Auth::User()->id)->paginate(4);
        return view('services', compact('services'));
    }
    public function ShowTable()
    {
        $services = Services::withTrashed()->get();
        return view('services_admin_list', compact('services'));
    }

    public function detail($id)
    {
        $service = Services::find($id);
        $user = User::find($service->users_id);
        $reviews = Review::where('id','=',$service->reviews_id)->get();

        return view('service_detail', compact('service', 'user','reviews'));
    }

    public function AddPageService()
    {
        $title = "Услуга";
        $sections = Services_tree::all();
        $users = User::all();
        $reviews = Review::all();

        return view('AddPage', compact('title', 'sections', 'users','reviews'));
    }

    public function AddService(Request $request)
    {
        $service = new Services();

        $service->title = ($request->title);
        $service->section_id = ($request->section);
        $service->cost = ($request->cost);
        $service->anounce_text = ($request->anounce_text);
        if ($request->anounce_image == null) {
        } else {
            $service->anounce_image = $request->anounce_image->storeAs('folder', $request->anounce_image->getClientOriginalName(), 'public');
        }
        $service->details_text = ($request->details_text);
        if ($request->details_image == null) {
        } else {
            $service->details_image = $request->details_image->storeAs('folder', $request->anounce_image->getClientOriginalName(), 'public');
        }
        $service->SEOTitle = ($request->SEOTitle);
        $service->SEOKeys = ($request->SEOKeys);
        $service->SEODescription = ($request->SEODescription);
        $service->ALTAnounceImg = ($request->ALTAnounceImg);
        $service->TITLEAnounceImg = ($request->TITLEAnounceImg);
        $service->FileNameAnounceImg = ($request->FileNameAnounceImg);
        $service->ALTDetailsImg = ($request->ALTDetailsImg);
        $service->TITLEDetailsImg = ($request->TITLEDetailsImg);
        $service->FileNameDetailsImg = ($request->FileNameDetailsImg);
        $service->TAGS = ($request->TAGS);
        $service->users_id = ($request->users_id);
        $service->reviews_id = ($request->reviews_id);

        $service->save();

        $id = 0;
        return redirect()->route('ShowTableServicesSections', 'id');
    }

    public function EditPageService($id)
    {
        $element = Services::withTrashed()->find($id);
        $sections = Services_tree::all();
        $parent_id = Services::withTrashed()->find($id)->section_id;
        $parent_section = Services_tree::find($parent_id);
        $users = User::all();
        $reviews = Review::all();
        $title = "Услуга";

        return view('EditPage', compact('element', 'title', 'sections', 'parent_id', 'parent_section', 'id','users','reviews'));
    }

    public function UpdateService(Request $request, $id)
    {
        $service = Services::find($id);

        $service->title = ($request->title);
        $service->section_id = ($request->section);
        $service->cost = ($request->cost);
        $service->anounce_text = ($request->anounce_text);
        if ($request->anounce_image == null) {
        } else {
            $service->anounce_image = $request->anounce_image->storeAs('folder', $request->anounce_image->getClientOriginalName(), 'public');
        }
        $service->details_text = ($request->details_text);
        if ($request->details_image == null) {
        } else {
            $service->details_image = $request->details_image->storeAs('folder', $request->details_image->getClientOriginalName(), 'public');
        }
        $service->SEOTitle = ($request->SEOTitle);
        $service->SEOKeys = ($request->SEOKeys);
        $service->SEODescription = ($request->SEODescription);
        $service->ALTAnounceImg = ($request->ALTAnounceImg);
        $service->TITLEAnounceImg = ($request->TITLEAnounceImg);
        $service->FileNameAnounceImg = ($request->FileNameAnounceImg);
        $service->ALTDetailsImg = ($request->ALTDetailsImg);
        $service->TITLEDetailsImg = ($request->TITLEDetailsImg);
        $service->FileNameDetailsImg = ($request->FileNameDetailsImg);
        $service->TAGS = ($request->TAGS);
        $service->users_id = ($request->users_id);
        $service->reviews_id = ($request->reviews_id);

        $service->save();

        $id = 0;
        return redirect()->route('ShowTableServicesSections', 'id');
    }

    public function delete(Request $request)
    {
        $service = Services::withTrashed()->find($request->id);
        if ($service->deleted_at == null) {
            $service = Services::find($request->id);
            $service->delete();

            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    public function restore(Request $request)
    {
        $service = Services::withTrashed()->find($request->id);

        if ($service->deleted_at != null) {
            $service = Services::onlyTrashed()->find($request->id)->restore();

            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}
