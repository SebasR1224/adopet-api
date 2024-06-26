<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        'abandonment_location',
        'abandonment_status',
        'abandonment_date',
        'report_date',
        'alert',
        'rescue_date',
        'rescue_observations',
        'response_time',
        'foundation_id',
        'reporting_user_id'
    ];

    /**
     * The animals that belong to the report abandoned animal.
     */
    public function animals(): HasMany
    {
        return $this->hasMany(Animal::class);
    }

     /**
     *  Get the foundation that owns the report abandoned animal.
     */
    public function foundation(): BelongsTo
    {
        return $this->belongsTo(Foundation::class);
    }

    /**
     *  Get the reporting user that owns the report abandoned animal.
     */
    public function reportingUser(): BelongsTo
    {
        return $this->belongsTo(ReportingUser::class);
    }
}
