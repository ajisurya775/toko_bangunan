<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Barang extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'barang';

    protected $guarded = [];

    public function Kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }
   /**
    * Get all of the varian for the varian
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function varian(): HasMany
   {
       return $this->hasMany(Varian::class);
   }


}
