<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdoptionRequest extends Model
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
        'adoption_request_date',
        'status',
        'alert',
        'animal_id',
        'user_id',
        'foundation_id'
    ];

    /**
     * Get the foundation that owns the adoption request.
     */
    public function animal(): BelongsTo
    {
        return $this->belongsTo(Animal::class);
    }

    /**
     * Get the foundation that owns the adoption request.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the foundation that owns the adoption request.
     */
    public function foundation(): BelongsTo
    {
        return $this->belongsTo(Foundation::class);
    }

    /**
     * Get the adoption that owns the adoption request.
     */
    public function adoption(): BelongsTo
    {
        return $this->belongsTo(Adoption::class);
    }
}
