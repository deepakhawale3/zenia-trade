<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Withdrawbydate extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_wallet_withdrawal_setting';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        ''
    ];
    public $timestamps = false; 
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
