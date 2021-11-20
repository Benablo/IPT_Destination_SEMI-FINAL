<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
        'id', 'address', 'type', 'rating'
    ];
    
    public function destination(){
        return $this->belongsTo('App\Destination');
  }
}
