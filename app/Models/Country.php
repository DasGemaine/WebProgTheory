<?php

namespace App\Models;

use App\Models\Ghost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;


    public function ghost(){
        return $this->hasMany(Ghost::class);
    }
}
