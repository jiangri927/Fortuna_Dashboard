<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //
    protected $table = 'language';
    protected $dates = ['created_at','updated_at'];
    protected $fillable =['email','role','language'];
}
