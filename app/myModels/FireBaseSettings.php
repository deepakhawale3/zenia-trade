<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FireBaseSettings extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_firebase_settings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        ''
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}