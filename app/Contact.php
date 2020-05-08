<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends  Model
{

    protected $fillable = [
        'first_name', 'middle_name', 'last_name','address_1','address2','phone_number'
    ];

}
