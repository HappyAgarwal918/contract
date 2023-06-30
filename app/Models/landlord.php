<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class landlord extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'landlord';

    protected $fillable = ['Landlord_name','Agent_name','Property','effect_on_DMY','expire_on_DMY','Duties_of_Agent1','Duties_of_Agent2','Duties_of_Agent3','Duties_of_Agent4','Hong_Kong_Dollars1','Property_Inspection','pass_keys_Agent','pass_keys_other','information_about_Landlord','Advertising','Disclosure_Agent','Acknowledgement_by_Landlord1','Acknowledgement_by_Landlord2','Landlord_sig','Agent_sig','HK_ID_Card_no','licence_number','company_state','Business_Registration_CertificateNo_Landlord','Agent_statement_No','Landlord_Address','Agent_Address','Landlord_phone','Agent_phone','Landlord_Fax','Agent_fax','Landlord_date','Agent_date'];

    // public $timestamps = false;
}
