<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ReportingUser extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
    ];

    /**
     * Get the report abandoned animals for the reporting user.
     */
    public function reportAbandonedAnimals(): HasMany
    {
        return $this->hasMany(ReportAbandonedAnimal::class);
    }
}
