<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    protected $table = "plans";
    protected $fillable = ['plan_name', 'price'];

    public function activations()
    {
    	return $this->belongsTo('App\Activations');
    }
}
