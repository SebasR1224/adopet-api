<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MedicalProcedure extends Model
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
        'observations',
        'animal_id',
        'type'
    ];

    /**
     * Get the animal that owns the medical procedure.
     */
    public function animal(): BelongsTo
    {
        return $this->belongsTo(Animal::class);
    }

    /**
     * Get the animal that owns the medical procedure.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(MedicalProcedureType::class, 'type');
    }
}
