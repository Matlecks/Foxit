<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class OrderController extends Controller
{
    public function askquestion(Request $request)
    {
        /* $order = new Order();

        $order->name = ($request->name);
        $order->phone = ($request->phone);
        $order->email = ($request->email);
        $order->interesting = ($request->interesting);
        $order->status = "";
        $order->message = ($request->message);

        $order->save(); */


        $mm = new SendMail($request);
        Mail::to($request->email)->send(new SendMail($request->message));

        /* Mail::send('emails.contact', $data, function ($message) use ($request) {
            $message->from($request->email);
            $message->to('your_email@example.com');
            $message->subject('New Contact Message');
        }); */

        return redirect()->back();
    }
}
