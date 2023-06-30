<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenant extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tenant';

    protected $fillable = ['Tenant_name','Agent_name','effect_on_DMY','expire_on_DMY','Duties_Agent1','Duties_Agent2','Duties_Agent3','Duties_Agent4','Property_Information1','Property_Information2','Agent_Disclosure','Acknowledgement1','Acknowledgement2','Sig_Tenant','sig_agent','HH_ID_NO','licence_number','company_state','Business_Reg_Certif_number_Tenant','Agent_statement_Number','Address_Tenant','Address_Agent','Tenant_phNO','Agent_PhNO','Tenant_FAX','Agent_FAX','Tenant_DATE','Agent_DATE'];

    // public $timestamps = false;
}
