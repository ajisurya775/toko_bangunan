<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CheckoutDetail extends Model
{
    use HasFactory;

    protected $table = 'checkoutdetail';

    protected $guarded = [];

    /**
     * Get the barang that owns the CheckoutDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function barang(): BelongsTo
    {
        return $this->belongsTo(Barang::class);
    }
    /**
     * Get the varian that owns the CheckoutDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function varian(): BelongsTo
    {
        return $this->belongsTo(Varian::class);
    }
}
