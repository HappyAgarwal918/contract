<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purchaser extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'purchaser';

    protected $fillable = ['Purchaser_name','effect_on_DMY','expire_on_DMY','Agent_agrees1','Agent_agrees2','Agent_agrees3','Agent_agrees4','Property_Info1','Property_Info2','Interest_Agent','Acknowledgement_Purchaser1','Acknowledgement_Purchaser2','Purchaser_sig','sig_agent','id_card_No','licence_no','company_please_state','Purchaser_Address','Agent_Address','Purchaser_number','Agent_number','Purchaser_FAX','Agent_FAX','Purchaser_date','Agent_date'];

    // public $timestamps = false;
}
