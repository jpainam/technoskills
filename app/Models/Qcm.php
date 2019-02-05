<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qcm extends Model
{
    
    protected $table = "qcm";
    
    public function getDescriptionAttribute(){
        $locale = \App::getLocale();
        $column = 'description_'.$locale;
        return $this->attributes[$column];
    }
    public function type(){
        return $this->belongsTo(QcmType::class);
    }
}
