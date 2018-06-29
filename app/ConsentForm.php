<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsentForm extends Model
{
  protected $fillable = ['consent_owner',
        'note',
        'consent_date',
        'consent_address',
        'consent_phone',
        'consent_alt_phone',
        'consent_pet_name', 
        'consent_breed',
        'consent_sex',
        'consent_color',
        'consent_primary_complaints',
        'consent_specify_complaints',
        'consent_condition',
        'consent_medication',
        'consent_case_no',
        'agree'

];
}
