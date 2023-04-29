<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Projects extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function users() : BelongsToMany
    {
        //return $this->belongsToMany(User::class);
        return $this->belongsToMany(User::class, 'users_projects', 'projects_id', 'user_id')->withPivot('projects_id', 'user_id');;
    }
}
