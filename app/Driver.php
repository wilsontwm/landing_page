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
    const STATE_JOHOR = 'Johor';
    const STATE_KEDAH = 'Kedah';
    const STATE_KELANTAN = 'Kelantan';
    const STATE_MALACCA = 'Malacca';
    const STATE_N9 = 'Negeri Sembilan';
    const STATE_PAHANG = 'Pahang';
    const STATE_PENANG = 'Penang';
    const STATE_PERAK = 'Perak';
    const STATE_PERLIS = 'Perlis';
    const STATE_SABAH = 'Sabah';
    const STATE_SARAWAK = 'Sarawak';
    const STATE_SELANGOR = 'Selangor';
    const STATE_TERENGGANU = 'Terengganu';
    const STATE_KL = 'WP Kuala Lumpur';
    const STATE_LABUAN = 'WP Labuan';
    const STATE_ARRAY = [
        self::STATE_JOHOR => 'Johor',
        self::STATE_KEDAH => 'Kedah',
        self::STATE_KELANTAN => 'Kelantan',
        self::STATE_MALACCA => 'Malacca',
        self::STATE_N9 => 'Negeri Sembilan',
        self::STATE_PAHANG => 'Pahang',
        self::STATE_PENANG => 'Penang',
        self::STATE_PERAK => 'Perak',
        self::STATE_PERLIS => 'Perlis',
        self::STATE_SABAH => 'Sabah',
        self::STATE_SARAWAK => 'Sarawak',
        self::STATE_SELANGOR => 'Selangor',
        self::STATE_TERENGGANU => 'Terengganu',
        self::STATE_KL => 'WP Kuala Lumpur',
        self::STATE_LABUAN => 'WP Labuan'
    ];
}
