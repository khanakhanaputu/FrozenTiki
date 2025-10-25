<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function module(){
        return $this->hasMany(Module::class);
    }
}
