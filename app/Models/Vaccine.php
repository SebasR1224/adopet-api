<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Vaccine extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'image',
        'formula',
        'indications',
        'species_destination',
        'pharmaceutical_form',
        'contraindications',
        'dose'
    ];

    /**
     * The animals that belong to the vaccine.
     */
    public function animals(): BelongsToMany
    {
        return $this->belongsToMany(Animal::class)
            ->using(AnimalVaccine::class);
    }
}
