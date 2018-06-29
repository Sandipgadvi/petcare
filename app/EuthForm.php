<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EuthForm extends Model
{
    protected $fillable = ['ethu_owner',
    'note',
    'ethu_date',
    'ethu_address',
    'ethu_phone',
    'ethu_alt_phone',
    'ethu_pet_name', 
    'ethu_breed',
    'ethu_sex',
    'ethu_color',
    'ethu_primary_complaints',
    'ethu_specify_complaints',
    'ethu_condition',
    'ethu_medication',
    'ethu_case_no',
    'agree'

];
}
