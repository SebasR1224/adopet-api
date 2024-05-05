<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'image',
        'observations',
        'adoption_date',
        'status',
        'animal_id',
        'user_id',
        'foundation_id',
        'adoption_request_id'
    ];
}
