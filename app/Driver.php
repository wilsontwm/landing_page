<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'drivers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'state'];

    /**
     * The constant for the value representation of gender
     */
    const STATE_KL = 'Kuala Lumpur';
    const STATE_SELANGOR = 'Selangor';
    const STATE_PENANG = 'Penang';
    const STATE_ARRAY = [
        self::STATE_KL => 'Kuala Lumpur',
        self::STATE_SELANGOR => 'Selangor',
        self::STATE_PENANG => 'Penang'
    ];
}
