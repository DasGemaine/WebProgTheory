<?php

namespace App\Models;

use App\Models\User;
use App\Models\Ghost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Story extends Model
{
    use HasFactory;

    protected $with = [
        'user',
        'ghost'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function ghost(){
        return $this->belongsTo(Ghost::class);
    }

}
