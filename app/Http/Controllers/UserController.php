<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use App\Models\Projects;
use App\Models\BaseInfo;
use App\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $contacts = BaseInfo::first();

        return view('personal', compact('users', 'contacts'));
    }

    public function detail($id)
    {
        $user = User::find($id);

        $services = Services::where('id', '=', $user->services_id)->get();
        $projects = $user->projects;
        $reviews = Review::where('id', '=', $user->reviews_id)->get();
        $contacts = BaseInfo::first();

        return view('person_detail', compact('services', 'user', 'reviews', 'projects', 'contacts'));
    }

    public function UserAdd(Request $request)
    {

        $validated = $request->validate([
            'avatar' => 'image',
            'logo' => 'image',
            'anounce_image' => 'image',
            'details_image' => 'image',
            'email' => 'required|email|unique:users,email|max:255',
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'login' => 'required',
            'password' => 'required|min:8|alpha_num',
            'role_id' => 'required',
        ]);
        if ($request->password == $request->confirm) {
            if ($request->role == null) {
                $UserRole = "User";
            } else {
                $UserRole = $request->role;
            }
            $registrate = new User();
            $registrate->name = ($request->name);
            $registrate->surname = ($request->surname);
            $registrate->job = ($request->job);
            if ($request->avatar == null) {
            } else {
                $registrate->avatar = $request->avatar->storeAs('folder', $request->avatar->getClientOriginalName(), 'public');
            }
            if ($request->logo == null) {
            } else {
                $registrate->logo = $request->logo->storeAs('folder', $request->logo->getClientOriginalName(), 'public');
            }
            if ($request->anounce_image == null) {
            } else {
                $registrate->anounce_image = $request->anounce_image->storeAs('folder', $request->anounce_image->getClientOriginalName(), 'public');
            }
            if ($request->detail_image == null) {
            } else {
                $registrate->detail_image = $request->detail_image->storeAs('folder', $request->detail_image->getClientOriginalName(), 'public');
            }
            $registrate->email = ($request->email);
            $registrate->login = ($request->email);
            $registrate->phone = ($request->phone);
            $registrate->password = Hash::make($request->password);
            $registrate->role = $UserRole;

            $registrate->anounce_text = ($request->anounce_text);
            $registrate->details_text = ($request->details_text);
            $registrate->SEOTitle = ($request->SEOTitle);
            $registrate->SEOKeys = ($request->SEOKeys);
            $registrate->SEODescription = ($request->SEODescription);
            $registrate->ALTAnounceImg = ($request->ALTAnounceImg);
            $registrate->TITLEAnounceImg = ($request->TITLEAnounceImg);
            $registrate->FileNameAnounceImg = ($request->FileNameAnounceImg);
            $registrate->ALTDetailsImg = ($request->ALTDetailsImg);
            $registrate->TITLEDetailsImg = ($request->TITLEDetailsImg);
            $registrate->FileNameDetailsImg = ($request->FileNameDetailsImg);
            $registrate->TAGS = ($request->TAGS);
            $registrate->reviews_id = ($request->reviews_id);

            $registrate->save();
            $registrate->projects()->attach($request->projects_id);
            if ($request->role == null) {
                return redirect()->route('main');
            } else {
                return redirect()->route('ShowTableUsers');
            }
        } else {
            return redirect()->route('registrate_page');
        }
    }

    public function UserAuth(Request $request)
    {
        $credentials = $request->validate([
            'login' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('cabinet');
        } else {

            return redirect()->back();
        }
    }

    public function AdminAuth(Request $request)
    {
        $credentials = $request->validate([
            'login' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('adminpage');
        } else {

            return redirect()->back();
        }
    }

    public function ShowTable()
    {
        $users = User::withTrashed()->get();
        return view('users_admin_list', compact('users'));
    }

    public function AddPageUser()
    {
        $title = "Пользователь";
        $projects = Projects::all();
        $roles = Role::all();

        return view('AddPage', compact('title', 'projects','roles'));
    }

    public function EditPageUser($id)
    {
        $element = User::withTrashed()->find($id);

        $roles = Role::all();
        $title = "Пользователь";
        $projects = Projects::all();
        $selected_projects = $element->projects;

        $role_id = User::find($id)->role_id;
        $role_id_in_array = $role_id - 1;
        $role_selected = Role::find($role_id);

        foreach ($roles as $role) {
            if ($role->id == $role_id) {
                unset($roles[$role_id_in_array]);
                break;
            }
        };

        return view('EditPage', compact('element', 'title', 'projects', 'selected_projects', 'roles','role_selected'));
    }

    public function UpdateUser(Request $request, $id)
    {
        $validated = $request->validate([
            'avatar' => 'image',
            'logo' => 'image',
            'anounce_image' => 'image',
            'detail_image' => 'image',
            'email' => 'email|unique:users,email|max:255',
            'password' => 'min:8|alpha_num',
        ]);

        if ($request->password == $request->confirm) {

            $user = User::find($id);
            $user->name = ($request->name);
            $user->surname = ($request->surname);
            $user->job = ($request->job);
            if ($request->avatar == null) {
            } else {
                $user->avatar = $request->avatar->storeAs('folder', $request->avatar->getClientOriginalName(), 'public');
            }
            if ($request->logo == null) {
            } else {
                $user->logo = $request->logo->storeAs('folder', $request->logo->getClientOriginalName(), 'public');
            }
            if ($request->anounce_image == null) {
            } else {
                $user->anounce_image = $request->anounce_image->storeAs('folder', $request->anounce_image->getClientOriginalName(), 'public');
            }
            if ($request->detail_image == null) {
            } else {
                $user->detail_image = $request->detail_image->storeAs('folder', $request->detail_image->getClientOriginalName(), 'public');
            }
            $user->email = ($request->email);
            $user->login = ($request->email);
            $user->phone = ($request->phone);
            if ($request->password != null) {
                $user->password = Hash::make($request->password);
            } else {
            }
            $user->role = ($request->role);
            $user->anounce_text = ($request->anounce_text);
            $user->details_text = ($request->details_text);
            $user->SEOTitle = ($request->SEOTitle);
            $user->SEOKeys = ($request->SEOKeys);
            $user->SEODescription = ($request->SEODescription);
            $user->ALTAnounceImg = ($request->ALTAnounceImg);
            $user->TITLEAnounceImg = ($request->TITLEAnounceImg);
            $user->FileNameAnounceImg = ($request->FileNameAnounceImg);
            $user->ALTDetailsImg = ($request->ALTDetailsImg);
            $user->TITLEDetailsImg = ($request->TITLEDetailsImg);
            $user->FileNameDetailsImg = ($request->FileNameDetailsImg);
            $user->TAGS = ($request->TAGS);
            $user->reviews_id = ($request->reviews_id);

            $user->projects()->sync($request->projects_id);
            $user->save();
            return redirect()->route('ShowTableUsers');
        } else {
            return back();
        }
    }

    public function delete(Request $request)
    {
        $user = User::withTrashed()->find($request->id);
        if ($user->deleted_at == null) {
            $user = User::find($request->id);
            $user->delete();

            return redirect()->route('ShowTableUsers');
        } else {
            return redirect()->route('ShowTableUsers');
        }
    }

    public function restore(Request $request)
    {
        $user = User::withTrashed()->find($request->id);

        if ($user->deleted_at != null) {
            $user = User::onlyTrashed()->find($request->id)->restore();

            return redirect()->route('ShowTableUsers');
        } else {
            return redirect()->route('ShowTableUsers');
        }
    }
}
