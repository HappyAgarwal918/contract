<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contractform extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'customer_form';

    protected $fillable = ['ownerName','court_order','building_order','slope_maintenance_order','lease','mortgage_or_charge','year_of_completion'];

    // public $timestamps = false;
}
