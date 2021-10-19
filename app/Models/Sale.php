<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use app\Modles\Purchases;
class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'price',
        'balance',
        'model',
        'make',
        'color',
        'amount_paid',
        'buyer_type',
        'company_name',
        'first_name',
        'middle_name',
        'last_name',
        'national_id',
        'kra_pin',
        'email',
        'sales_date',
        'description',
        'phone_number',
        'city',
        'email',
        'y_o_m'
    ];

    public function purchase(){
        return $this->belongsTo(Purchases::class);
    }
}