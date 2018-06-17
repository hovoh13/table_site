<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cantact extends Model
{
    protected $table ='cantact';
    protected $fillable = [ 'email','facebook','instagram','phone','phone_city','maps'];
    public $timestamps = false;

    
}
