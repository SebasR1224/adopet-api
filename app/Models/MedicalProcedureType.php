<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MedicalProcedureType extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['type', 'procedure'];

    /**
     * Get the medical procedures for the medical procedure type.
     */
    public function medicalProcedures(): HasMany
    {
        return $this->hasMany(MedicalProcedure::class, 'type');
    }
}
