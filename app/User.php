<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'name', 'email', 'pass','phone','sex','addtime','user_name'

    ];
    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
