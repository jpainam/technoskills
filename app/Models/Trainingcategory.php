<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 
class Trainingcategory extends Model{
 
    public function trainings()
    {
        return $this->hasMany(Training::class);
    }
}
