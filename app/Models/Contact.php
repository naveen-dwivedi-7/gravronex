<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model

{
    protected $table = 'contact_messages'; // 👈 fix here

    protected $fillable = ['name', 'email', 'message'];
       
    public $timestamps = false; // ✅ Tell Laravel not to use timestamps

}
