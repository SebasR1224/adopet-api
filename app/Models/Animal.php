<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Animal extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'image',
        'description',
        'age',
        'coat_color',
        'especie',
        'race',
        'weight',
        'status',
        'gender',
        'foundation_id',
        'report_abandoned_animal_id'
    ];

    /**
     *  Get the foundation that owns the animal.
     */
    public function foundation(): BelongsTo
    {
        return $this->belongsTo(Foundation::class);
    }

    /**
     * The vaccines that belong to the animal.
     */
    public function vaccines(): BelongsToMany
    {
        return $this->belongsToMany(Vaccine::class)
            ->using(AnimalVaccine::class);
    }

     /**
     *  Get the report abandoned animal that owns the animal.
     */
    public function reportAbandonedAnimal(): BelongsTo
    {
        return $this->belongsTo(ReportAbandonedAnimal::class);
    }

    /**
     * Get the medical procedures for the animal.
     */
    public function medicalProcedures(): HasMany
    {
        return $this->hasMany(MedicalProcedure::class);
    }

    /**
     * Get the adoption requests for the animal.
     */
    public function adoptionRequests(): HasMany
    {
        return $this->hasMany(AdoptionRequest::class);
    }

    /**
     * Get the adoption that owns the animal.
     */
    public function adoption(): BelongsTo
    {
        return $this->belongsTo(Adoption::class);
    }
}
