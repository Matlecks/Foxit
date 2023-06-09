<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;
use App\Models\BaseInfo;

class ReviewController extends Controller
{

    public function index()
    {
        $reviews = Review::where('status','=','public')->limit(4)->get();
        $contacts = BaseInfo::first();

        return view('reviews', compact('reviews','contacts'));
    }

    public function ShowTable()
    {
        $reviews = Review::withTrashed()->get();
        return view('reviews_admin_list', compact('reviews'));
    }

    public function AddPageReview()
    {
        $title = "Отзыв";
        $users = User::all();

        return view('AddPage', compact('title','users'));
    }

    public function AddReview(Request $request)
    {
        $review = new Review();

        $review->review_text = ($request->review_text);
        $review->status = ($request->status);
        $review->projects_id = ($request->projects_id);
        $review->services_id = ($request->services_id);
        $review->users_id = ($request->users_id);

        $review->save();

        return redirect()->route('ShowTableReviews');
    }

    public function EditPageReview($id)
    {
        $element = Review::withTrashed()->find($id);
        //$users = User::where('id','=',$element->users_id)->get();
        $users = User::all();
        $title = "Отзыв";

        return view('EditPage', compact('element', 'title', 'users'));
    }

    public function UpdateReview(Request $request, $id)
    {
        $review = Review::find($id);

        $review->review_text = ($request->review_text);
        $review->status = ($request->status);
        $review->projects_id = ($request->projects_id);
        $review->services_id = ($request->services_id);
        $review->users_id = ($request->users_id);

        $review->save();

        return redirect()->route('ShowTableReviews');
    }

    public function delete(Request $request)
    {
        $review = Review::withTrashed()->find($request->id);
        if ($review->deleted_at == null) {
            $review = Review::find($request->id);
            $review->delete();

            return redirect()->route('ShowTableReviews');
        } else {
            return redirect()->route('ShowTableReviews');
        }
    }

    public function restore(Request $request)
    {
        $review = Review::withTrashed()->find($request->id);

        if ($review->deleted_at != null) {
            $review = Review::onlyTrashed()->find($request->id)->restore();

            return redirect()->route('ShowTableReviews');
        } else {
            return redirect()->route('ShowTableReviews');
        }
    }
}
