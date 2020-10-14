<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{
    protected $table = "stores";
    protected $fillable = ['store_name', 'region', 'address', 'status'];

    public function activations()
    {
    	return $this->belongsTo('App\Activations');
    }
}
