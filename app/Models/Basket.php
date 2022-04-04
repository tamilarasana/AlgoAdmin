<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\BasketCat;

class Basket extends Model
{
    use HasFactory;

    protected $fillable = [
        'basket_id',
        'basketname',
        'tokenId',
        'tokenName',
        'qtyPerExe',
        'SqTarget',
        'StLoss',
        'lossSqr',
        'sqst',
        'sqrdPrice',
        'sqrdSignal',
        'ticket_price',
        'ttl_tk_price',
        'margin_price',
        'status'
    ];

    public function basketcat(){
        return $this->belongsTo(BasketCat::class);
    }
}
