<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'make',
        'y_o_m',
        'color',
        'reg_no',
        'log_book_no',
        'engine_no',
        'chasis_no',
        'price',
        'surplier_type',
        'company_name',
        'first_name',
        'middle_name',
        'last_name',
        'city',
        'phone_number',
        'email',
        'national_id',
        'kra_pin',
        'purchase_date',
        'description',
        'status'        
    ];
}
