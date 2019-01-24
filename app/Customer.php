<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //kasik tau nama tabel
    protected $table = 'customer';

    public $timestamps = false;
    //yang kedua attributnya
    protected $fillable = [
      'customer_id',
      'name',
      'address'
    ];
}
