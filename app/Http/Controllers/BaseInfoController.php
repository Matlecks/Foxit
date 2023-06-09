<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaseInfo;

class BaseInfoController extends Controller
{
    public function show_contacts()
    {
        $contacts = BaseInfo::first();

        return view('contact_admin_list', compact('contacts'));
    }

    public function show_socseti()
    {
        $contacts = BaseInfo::first();

        return view('socseti_admin_list', compact('contacts'));
    }
    public function update_contacts(Request $request)
    {
        $contacts = BaseInfo::first();

        $contacts->phone = $request->phone;
        $contacts->email = $request->email;
        $contacts->time = $request->time;
        $contacts->address = $request->address;

        $contacts->save();

        return redirect()->route('ShowContacts');
    }

    public function update_socseti(Request $request)
    {
        $contacts = BaseInfo::first();

        $contacts->vk = $request->vk;
        $contacts->inst = $request->inst;
        $contacts->whatsapp = $request->whatsapp;
        $contacts->tg = $request->tg;

        $contacts->save();

        return redirect()->route('ShowSocseti');
    }
}
