<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function address(): HasOne
    {
        return $this->hasOne(Address::class, 'user', 'id');
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class,'author', 'id');
    }

    public function commentsOnMyPost(): HasManyThrough
    {
        return $this->hasManyThrough(Comment::class, Post::class, 'author','post', 'id', 'id');
    }
}
