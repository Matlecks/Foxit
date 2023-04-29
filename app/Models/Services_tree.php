<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Services;
use Illuminate\Database\Eloquent\SoftDeletes;

class Services_tree extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function services() {

        return $this->belongsTo(Services::class);
    }
}
