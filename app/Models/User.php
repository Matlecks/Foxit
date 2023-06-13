<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Projects;
use App\Models\Review;
use App\Models\Services;
use App\Models\Posts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Projects::class, 'users_projects', 'user_id', 'projects_id');
    }

    public function userToService()
    {
        return $this->hasMany(Services::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function posts()
    {
        return $this->hasMany(Posts::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
