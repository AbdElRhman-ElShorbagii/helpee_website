<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HelperForm extends Model
{

    protected $fillable = [
        'fname',
        'lname',
        'gender',
        'job' ,
        'email', 
        'mobileNumber', 
        'country' ,
        'city' ,
        'district' 
      ];
}
