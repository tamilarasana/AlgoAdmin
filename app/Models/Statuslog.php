<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statuslog extends Model
{
    use HasFactory;

    protected $fillable = [
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
        'status'
    ];
}
