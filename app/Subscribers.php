<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribers extends Model
{
    protected $table = "subscribers";
    protected $fillable = ['fullname', 'email', 'address', 'birth_date'];

    public function activations()
    {
    	return $this->belongsTo('App\Activations');
    }
}
