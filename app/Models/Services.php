<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Services_tree;
use App\Models\User;
use App\Models\Review;


class Services extends Model
{
    use HasFactory;
    use SoftDeletes;


    public function servicestree() {

        return $this->hasMany(Services_tree::class);
    }
    public function servicesToUser() {

        return $this->hasMany(User::class);
    }

    public function servicesToReview() {

        return $this->hasMany(Review::class);
    }
}
