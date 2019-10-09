<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['id', 'name', 'fathers_name', 'national_code', 'doctor', 'sickness_type', 'insurance_type', 'insurance', 'date_transplant', 'transplant_hospital', 'transplant_doctor', 'drug', 'home_adres', 'work_adres', 'home_phone', 'work_phone', 'cellphone', 'required_phone', 'account_number',
        'id_shenasname','date_birth','place_birth','marital_status','job','Wifes_job','fathers_job','education','Wifes_education','house','taht_tkfol','Cause_illness','hepatitis','Start_dialysis','Onset_disease','insurance_number','blood_group','Another_disease','Insurance_mokaml',
        'Physical_activity','Hiv','diet','Family_his_illness','Date_death','Gender','date_sabt','Nationality','dialysis_hospital'];

    public function supports()
    {
        return $this->hasMany('App\Support');
    }

    public function letters()
    {
        return $this->hasMany('App\Letter');
    }
    protected $table = 'patients';
    protected $primaryKey = 'id';
}


