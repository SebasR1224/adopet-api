<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Foundation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'logo',
        'nit',
        'description',
        'email',
        'phone',
        'web_site',
        'mission',
        'vision',
        'ranking_score',
        'status'
    ];

    /**
     * Get the users for the foundation.
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get the veterinarians for the foundation.
     */
    public function veterinarians(): HasMany
    {
        return $this->hasMany(Veterinarian::class);
    }

    /**
     * Get the legal representatives for the foundation.
     */
    public function legalRepresentatives(): HasMany
    {
        return $this->hasMany(LegalRepresentative::class);
    }

    /**}
     * Get the animals for the foundation.
     */
    public function animals(): HasMany
    {
        return $this->HasMany(Animal::class);
    }

    /**
     * Get the Adoption requests for the foundation
     */
    public function adoptionRequests(): HasMany
    {
        return $this->hasMany(AdoptionRequest::class);
    }

    /**
     * Get the adoptions for the foundation.
     */
    public function adoptions(): HasMany
    {
        return $this->hasMany(Adoption::class);
    }

    /**
     * Get the report abandoned animals for the foundation.
     */
    public function reportAbandonedAnimals(): HasMany
    {
        return $this->hasMany(ReportAbandonedAnimal::class);
    }
}
