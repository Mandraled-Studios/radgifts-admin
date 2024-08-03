<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class VariantAttribute extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'attribute_name',
        'switch_type',
        'hamper_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'hamper_id' => 'integer',
    ];

    public function hamper(): BelongsTo
    {
        return $this->belongsTo(Hamper::class);
    }

    public function variantValues(): HasMany
    {
        return $this->hasMany(VariantValue::class);
    }
}
