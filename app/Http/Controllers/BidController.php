<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bid;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Notifications\PhoneCallBid;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
use App\Models\User;

class BidController extends Controller
{
    use Notifiable;
    public function ShowTable()
    {
        $bids = Bid::withTrashed()->orderBy('created_at', 'desc')->get();
        return view('bid_admin_list', compact('bids'));
    }

    public function index()
    {
        return view('phone_call_bid');
    }

    /* Форма Задать вопрос  */
    public function askquestion(Request $request)
    {
        $bid = new Bid();

        $bid->name = ($request->name);
        $bid->phone = ($request->phone);
        $bid->email = ($request->email);
        $bid->interesting = ($request->interesting);
        $bid->form = "phone_call_bid";
        $bid->status = "open";
        $bid->message = ($request->message);

        $bid->save();

        $mm = new SendMail($request);
        Mail::to($request->email)->send(new SendMail($request));


        $user = User::where('email', '=', 'damir-khaybulin@mail.ru')->first();

        Notification::send($user, new PhoneCallBid($request));


        return redirect()->back();
    }

    /* Форма Подать заявку */
    public function takerequest(Request $request)
    {
        $bid = new Bid();

        $bid->name = ($request->name);
        $bid->phone = ($request->phone);
        $bid->email = ($request->email);
        $bid->interesting = ($request->interesting);
        $bid->form = "take_request_bid";
        $bid->status = "open";
        $bid->message = ($request->message);

        $bid->save();

        $mm = new SendMail($request);
        Mail::to($request->email)->send(new SendMail($request));

        $user = User::where('email', '=', 'damir-khaybulin@mail.ru')->first();

        Notification::send($user, new PhoneCallBid($request));

        return redirect()->back();
    }

    /* Форма Написать сотруднику */
    public function writemessage(Request $request)
    {
        $bid = new Bid();

        $bid->name = ($request->name);
        $bid->phone = ($request->phone);
        $bid->email = ($request->email);
        $bid->interesting = ($request->interesting);
        $bid->form = "write_mess_bid";
        $bid->status = "open";
        $bid->message = ($request->message);

        $bid->save();

        $mm = new SendMail($request);
        Mail::to($request->email)->send(new SendMail($request));

        $user = User::where('email', '=', 'damir-khaybulin@mail.ru')->first();

        Notification::send($user, new PhoneCallBid($request));

        return redirect()->back();
    }
}
