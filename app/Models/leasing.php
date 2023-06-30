<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leasing extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'leasing';

    protected $fillable = [''];

    // public $timestamps = false;
}
