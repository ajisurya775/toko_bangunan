<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Varian extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'varian';

    protected $guarded =[];

    /**
     * Get the Varian that owns the Varian
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function barang(): BelongsTo
    {
        return $this->belongsTo(Barang::class);
    }
    /**
     * Get all of the keranjang for the Varian
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function keranjang(): HasMany
    {
        return $this->hasMany(Keranjang::class);
    }
}
