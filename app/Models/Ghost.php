<?php

namespace App\Models;

use App\Models\Story;
use App\Models\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ghost extends Model
{
    use HasFactory;

    protected $with = [
        'country'
    ];

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function story(){
        return $this->hasMany(Story::class);
    }

    
}
