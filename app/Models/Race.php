<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Race extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'especie_id'];

    /**
     * Get the especie that owns the race.
     */
    public function especie(): BelongsTo
    {
        return $this->belongsTo(Especie::class);
    }
}
