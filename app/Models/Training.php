<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model{
    
    protected $table = "training";
    public function category() {
        return $this->belongsTo(TrainingCategory::class);
    }
    public function place(){
        return $this->belongsTo(TrainingPlace::class);
    }
}
