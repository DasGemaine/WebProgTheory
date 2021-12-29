<?php

namespace App\Models;

use App\Models\Story;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ghost extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'origin',
        'information',
        'ghost_image',
        'thumbnail_text'
    ];


    public function story(){
        return $this->hasMany(Story::class);
    }

    
}
