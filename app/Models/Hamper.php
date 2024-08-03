<?php

namespace App\Models;

use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Hamper extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'excerpt',
        'hamper_description',
        'thumbnail',
        'usual_price',
        'offer_price',
        'corporate_hamper_flag',
        'seo_title',
        'meta_description',
        'slug',
        'is_active',
        'has_variants',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'usual_price' => 'decimal:2',
        'offer_price' => 'decimal:2',
        'corporate_hamper_flag' => 'boolean',
        'is_active' => 'boolean',
        'has_variants' => 'boolean',
    ];

    public function media(): BelongsToMany
    {
        return $this->belongsToMany(Media::class);
    }

    public function collections(): BelongsToMany
    {
        return $this->belongsToMany(Collection::class);
    }

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }

    public function variantAttributes(): HasMany
    {
        return $this->hasMany(VariantAttribute::class);
    }
}
