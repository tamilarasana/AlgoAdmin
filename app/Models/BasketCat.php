<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

use App\Models\Basket;

class BasketCat extends Model
{
    use HasFactory;

    protected $fillable =['basket_name' , 'description', 'fromdate', 'todate'];

    public $timestamps = false;

    public function basket (){
        return $this->hasMany(Basket::class);
    }

    // public function setfromdateAttribute($value)
    // {

    //  $this->attributes['fromdate'] = Carbon::createFromFormat('d/m/Y', $value)->toDateString();
    // }

    // public function setToDateAttribute($value)
    // {
    //     $this->attributes['todate'] = Carbon::createFromFormat('d/m/Y', $value)->toDateString();
    // }

    // public function getFromDateAtAttribute($value)
    // {
    //     $date = Carbon::parse($value);
    //     return $date->format('d-m-Y');
    // }
    // public function getToDateAttribute($value)
    // {
    //      return Carbon::parse($value)->format('m/d/Y');
    // }

    // public function setDateofBirthAttribute($value)
    // {
    //    $this->attributes['date_of_birth']  = \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format('m/d/Y');
    // }
}



