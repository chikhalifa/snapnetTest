<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    public function country(){
        return $this->belongsTo(Countries::class);
        }
    // use HasFactory;
    public function cities(){
        return $this->hasMany(Cities::class, 'state_id', 'id');
        }
}
