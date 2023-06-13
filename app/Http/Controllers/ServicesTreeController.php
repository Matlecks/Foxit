<?php

namespace App\Http\Controllers;

use App\Models\BaseInfo;
use App\Models\Services_tree;
use App\Models\Services;


use Illuminate\Http\Request;

class ServicesTreeController extends Controller
{
    public function indexsections()
    {
        $sections = Services_tree::where('parent_id', '=', 1)->get();
        $services = Services::where('section_id', '=', 1)->get();
        $contacts = BaseInfo::first();

        return view('services', compact('sections', 'services','contacts'));
    }

    public function indexsubsections($id)
    {

        $subsections = Services_tree::where('parent_id', '=', $id)->get();
        $services = Services::where('section_id', '=', $id)->get();
        $contacts = BaseInfo::first();

        return view('services', compact('subsections', 'services','contacts'));
    }

    public function tablesections()
    {

        $sections = Services_tree::where('parent_id', '=', 1)->withTrashed()->get();
        $services = Services::where('section_id', '=', 1)->get();

        //dd($sections);
        return view('services_admin_list', compact('sections', 'services'));
    }

    public function tablesubsections($id)
    {

        $subsections = Services_tree::where('parent_id', '=', $id)->withTrashed()->get();

        $services = Services::where('section_id', '=', $id)->get();
        //dd($subsections, $services);
        return view('services_admin_list', compact('subsections', 'services'));
    }


    public function AddPageSection()
    {
        $title = "Раздел";
        $sections = Services_tree::all();


        return view('AddPage', compact('title', 'sections'));
    }

    public function AddSection(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'anounce_image' => 'image',
            'details_image' => 'image',
        ]);

        $section = new Services_tree();

        $section->title = ($request->title);
        $section->parent_id = ($request->section);
        $section->anounce_text = ($request->anounce_text);
        if ($request->anounce_image == null) {
        } else {
            $section->anounce_image = $request->anounce_image->storeAs('folder', $request->anounce_image->getClientOriginalName(), 'public');
        }
        $section->details_text = ($request->details_text);
        if ($request->details_image == null) {
        } else {
            $section->details_image = $request->details_image->storeAs('folder', $request->anounce_image->getClientOriginalName(), 'public');
        }
        $section->SEOTitle = ($request->SEOTitle);
        $section->SEOKeys = ($request->SEOKeys);
        $section->SEODescription = ($request->SEODescription);
        $section->ALTAnounceImg = ($request->ALTAnounceImg);
        $section->TITLEAnounceImg = ($request->TITLEAnounceImg);
        $section->FileNameAnounceImg = ($request->FileNameAnounceImg);
        $section->ALTDetailsImg = ($request->ALTDetailsImg);
        $section->TITLEDetailsImg = ($request->TITLEDetailsImg);
        $section->FileNameDetailsImg = ($request->FileNameDetailsImg);
        $section->TAGS = ($request->TAGS);

        $section->save();

        $id = 0;
        return redirect()->route('ShowTableServicesSections', 'id');
    }

    public function EditPageServiceSection($id)
    {
        $element = Services_tree::withTrashed()->find($id);
        $sections = Services_tree::all();
        $parent_id = Services_tree::withTrashed()->find($id)->parent_id;
        $parent_section = Services_tree::find($parent_id);

        $title = "Раздел";

        return view('EditPage', compact('element', 'title', 'sections', 'parent_section', 'parent_id', 'id'));
    }

    public function UpdateServiceSection(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'anounce_image' => 'image',
            'details_image' => 'image',
        ]);

        $section = Services_tree::find($id);

        $section->title = ($request->title);
        $section->parent_id = ($request->section);
        $section->anounce_text = ($request->anounce_text);
        if ($request->anounce_image == null) {
        } else {
            $section->anounce_image = $request->anounce_image->storeAs('folder', $request->anounce_image->getClientOriginalName(), 'public');
        }
        $section->details_text = ($request->details_text);
        if ($request->details_image == null) {
        } else {
            $section->details_image = $request->details_image->storeAs('folder', $request->anounce_image->getClientOriginalName(), 'public');
        }
        $section->SEOTitle = ($request->SEOTitle);
        $section->SEOKeys = ($request->SEOKeys);
        $section->SEODescription = ($request->SEODescription);
        $section->ALTAnounceImg = ($request->ALTAnounceImg);
        $section->TITLEAnounceImg = ($request->TITLEAnounceImg);
        $section->FileNameAnounceImg = ($request->FileNameAnounceImg);
        $section->ALTDetailsImg = ($request->ALTDetailsImg);
        $section->TITLEDetailsImg = ($request->TITLEDetailsImg);
        $section->FileNameDetailsImg = ($request->FileNameDetailsImg);
        $section->TAGS = ($request->TAGS);

        $section->save();

        return redirect()->route('ShowTableServicesSections', 'id');
    }

    public function delete(Request $request)
    {
        $section = Services_tree::withTrashed()->find($request->id);
        if ($section->deleted_at == null) {
            $section = Services_tree::find($request->id);
            $section->delete();

            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    public function restore(Request $request)
    {
        $section = Services_tree::withTrashed()->find($request->id);

        if ($section->deleted_at != null) {
            $section = Services_tree::onlyTrashed()->find($request->id)->restore();

            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}
