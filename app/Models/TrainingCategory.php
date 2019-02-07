<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 
class TrainingCategory extends Model{
 
    public function trainings()
    {
        return $this->hasMany(Training::class);
    }
}
