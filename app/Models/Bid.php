<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use App\Notifications\PhoneCallBid;


class Bid extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Notifiable;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'interesting',
        'message',
    ];

    public function notifybid()
    {
        $user = User::where('email', '=', 'damir-khaybulin@mail.ru');
        $user->notify(new PhoneCallBid($this));
    }
}
