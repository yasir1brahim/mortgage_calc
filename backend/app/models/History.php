<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'history';
    protected $fillable = ['user_id',
                           'monthly_payment',
                           'principle_loan_amount',
                           'no_of_payments',
                           'date_time',
                           'interest_rate'];
}
