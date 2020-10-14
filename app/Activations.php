<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activations extends Model
{
    protected $table = "activations";
    protected $fillable = ['msisdn','subscriber_id','plans_id','periode','stores_id','agent_name','agent_email','status'];

    public function subscribers()
    {
    	return $this->hasOne('App\Subscribers','id');
    }

    public function plans()
    {
    	return $this->hasOne('App\Plans','id');
    }

    public function stores()
    {
    	return $this->hasOne('App\Stores','id');
    }
}
