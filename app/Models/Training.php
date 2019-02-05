<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model{
    
    protected $table = "training";
    public function category() {
        return $this->belongsTo(Trainingcategory::class);
    }
}
