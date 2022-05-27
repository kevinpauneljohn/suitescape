<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staycation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'typeofPlace',
        'typeofHouse',
        'privacyType',
        'address',
        'numberGuest',
        'numberBed',
        'numberBedrooms',
        'numberBathrooms',
        'amenities',
        'guestFavorite',
        'safetyItem',
        'mainImg',
        'subImg1',
        'subImg2',
        'subImg3',
        'subImg4',
        'name',
        'highlight',
        'detail',
        'price',
        'security',
        'userid',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
}
