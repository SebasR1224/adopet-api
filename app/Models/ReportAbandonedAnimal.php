<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportAbandonedAnimal extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
        'abandonment_place',
        'abandonment_status',
        'abandonment_date',
        'report_date',
        'alert',
        'rescue_date',
        'rescue_observations',
        'response_time',
        'foundation_id'
    ];
}
