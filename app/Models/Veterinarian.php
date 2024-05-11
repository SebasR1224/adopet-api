<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Veterinarian extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'dni',
        'email',
        'phone',
        'foundation_id'
    ];

    /**
     *  Get the foundation that owns the veterinarian.
     */
    public function foundation(): BelongsTo
    {
        return $this->belongsTo(Foundation::class);
    }
}
