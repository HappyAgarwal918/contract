<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'vendor';

    protected $fillable = ['Vendor','Agent','Property','effect_on_DMY','expire_on_DMY','Duties_of_Agent1','Duties_of_Agent2','Duties_of_Agent3','Duties_of_Agent4','List_price1','allow_viewing_Property','pass_keys_Agent','pass_keys_Other','vendor_info','advertisement','Disclosure_of_Interest','Acknowledgement1','Acknowledgement2','Signature_Vendor','Signature_agent','ID_card_NO','licence_No','company_state','Business_Certificate_NO_Vendor','Business_Certificate_NO_Agent','phNo_Vendor','phNo_Agent','Fax_Vendor','Fax_Agent','date_Vendor','date_Agent'];

    // public $timestamps = false;
}
