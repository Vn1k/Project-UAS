<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    public function volunteers(){
        return $this->belongsToMany(Volunteer::class);
    }
    public function sponsors(){
        return $this->belongsToMany(Sponsor::class);
    }
}
