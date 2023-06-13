<?php

namespace App\Http\Controllers;

use App\Models\BaseInfo;
use App\Models\Posts;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function index()
    {
        $years = Posts::selectRaw('YEAR(created_at) as year')->distinct()->orderBy('year', 'desc')->get();
        $contacts = BaseInfo::first();
        $posts = Posts::all();

        return view('posts', compact('posts','years','contacts'));
    }

    public function index_filter($year)
    {
        $years = Posts::selectRaw('YEAR(created_at) as year')->distinct()->orderBy('year', 'desc')->get();
        $contacts = BaseInfo::first();
        $posts = Posts::whereYear('created_at', $year)->get();

        return view('posts', compact('posts','years','contacts'));
    }

    public function detail($id)
    {
        $post = Posts::find($id);
        $user = User::find($post->users_id);
        $contacts = BaseInfo::first();
        //$reviews = Review::where('id','=',$post->reviews_id)->get();

        return view('post_detail', compact('post', 'user','contacts'));
    }

    public function ShowTable()
    {
        $posts = Posts::withTrashed()->get();
        return view('posts_admin_list', compact('posts'));
    }

    public function AddPagePosts()
    {
        $title = "Пост";
        return view('AddPage', compact('title'));
    }

    public function AddPost(Request $request)
    {
        $post = new Posts();

        $post->title = ($request->title);
        $post->anounce_text = ($request->anounce_text);
        if ($request->anounce_image == null) {
        } else {
            $post->anounce_image = $request->anounce_image->storeAs('folder', $request->anounce_image->getClientOriginalName(), 'public');
        }
        $post->details_text = ($request->details_text);
        if ($request->details_image == null) {
        } else {
            $post->details_image = $request->details_image->storeAs('folder', $request->details_image->getClientOriginalName(), 'public');
        }
        $post->SEOTitle = ($request->SEOTitle);
        $post->SEOKeys = ($request->SEOKeys);
        $post->SEODescription = ($request->SEODescription);
        $post->ALTAnounceImg = ($request->ALTAnounceImg);
        $post->TITLEAnounceImg = ($request->TITLEAnounceImg);
        $post->FileNameAnounceImg = ($request->FileNameAnounceImg);
        $post->ALTDetailsImg = ($request->ALTDetailsImg);
        $post->TITLEDetailsImg = ($request->TITLEDetailsImg);
        $post->FileNameDetailsImg = ($request->FileNameDetailsImg);
        $post->TAGS = ($request->TAGS);

        $post->save();

        return redirect()->route('ShowTablePosts');
    }

    public function EditPagePost($id)
    {
        $element = Posts::withTrashed()->find($id);

        $title = "Пост";

        return view('EditPage', compact('element', 'title'));
    }

    public function UpdatePost(Request $request, $id)
    {
        $validated = $request->validate([

            'title' => 'required',
            'anounce_image' => 'image',
            'details_image' => 'image',

        ]);

        $post = Posts::find($id);

        $post->title = ($request->title);
        $post->anounce_text = ($request->anounce_text);
        if ($request->anounce_image == null) {
        } else {
            $post->anounce_image = $request->anounce_image->storeAs('folder', $request->anounce_image->getClientOriginalName(), 'public');
        }
        $post->details_text = ($request->details_text);
        if ($request->details_image == null) {
        } else {
            $post->details_image = $request->details_image->storeAs('folder', $request->details_image->getClientOriginalName(), 'public');
        }
        $post->SEOTitle = ($request->SEOTitle);
        $post->SEOKeys = ($request->SEOKeys);
        $post->SEODescription = ($request->SEODescription);
        $post->ALTAnounceImg = ($request->ALTAnounceImg);
        $post->TITLEAnounceImg = ($request->TITLEAnounceImg);
        $post->FileNameAnounceImg = ($request->FileNameAnounceImg);
        $post->ALTDetailsImg = ($request->ALTDetailsImg);
        $post->TITLEDetailsImg = ($request->TITLEDetailsImg);
        $post->FileNameDetailsImg = ($request->FileNameDetailsImg);
        $post->TAGS = ($request->TAGS);

        $post->save();

        return redirect()->route('ShowTablePosts');
    }

    public function delete(Request $request)
    {
        $post = Posts::withTrashed()->find($request->id);
        if ($post->deleted_at == null) {
            $posts = Posts::find($request->id);
            $posts->delete();

            return redirect()->route('ShowTablePosts');
        } else {
            return redirect()->route('ShowTablePosts');
        }
    }

    public function restore(Request $request)
    {
        $post = Posts::withTrashed()->find($request->id);

        if ($post->deleted_at != null) {
            $posts = Posts::onlyTrashed()->find($request->id)->restore();

            return redirect()->route('ShowTablePosts');
        } else {
            return redirect()->route('ShowTablePosts');
        }
    }
}
