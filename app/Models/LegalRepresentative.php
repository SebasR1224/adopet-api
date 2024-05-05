<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LegalRepresentative extends Model
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
        'dni',
        'email',
        'phone',
        'address',
        'foundation_id'
    ];

    /**
     *  Get the foundation that owns the legal representative.
     */
    public function foundation(): BelongsTo
    {
        return $this->belongsTo(Foundation::class);
    }
}
