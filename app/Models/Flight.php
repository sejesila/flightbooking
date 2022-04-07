<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    public function from_cities(){
        return $this->belongsTo(City::class,'from','id');
    }
    public function to_cities(){
        return $this->belongsTo(City::class,'to','id');
    }
    public function airlines(){
        return $this->belongsTo(Airline::class,'airline','id');
    }
    public function routes(){
        return $this->belongsTo(Route::class,'route_no','id');
    }
}
