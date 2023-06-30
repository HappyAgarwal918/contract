<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'contract';

    protected $fillable = [''];

    // public $timestamps = false;
}
