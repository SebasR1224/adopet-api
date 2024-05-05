<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    /**
     * Get the animal associated width the adoption.
     */
    public function animal(): HasOne
    {
        return $this->hasOne(Animal::class);
    }

    /**
     * Get the user that owns the adoption.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the foundation that owns the adoption.
     */
    public function foundation(): BelongsTo
    {
        return $this->belongsTo(Foundation::class);
    }

    /**
     * Get de adoption request associated width the adoption.
     */
    public function adoptionRequest(): HasOne
    {
        return $this->hasOne(AdoptionRequest::class);
    }
}
