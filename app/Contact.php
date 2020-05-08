<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends  Model
{

    protected $fillable = [
        'first_name', 'middle_name', 'last_name','address_1','address2','phone_number'
    ];


    public static function rules ($id=0, $merge=[]) {
        return array_merge(
            [
                'first_name' => 'required',
                'middle_name' => 'required',
                'last_name' => 'required',
                'address_1' => 'required',
                'phone_number' => 'required|numeric|unique:contacts,phone_number'.($id ? ",$id" : '')
            ],
            $merge);
    }
}
