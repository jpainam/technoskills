<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model{
    protected $table = "levels";
    
    public function getDescriptionAttribute(){
         $locale = \App::getLocale();
        $column = "description_" . $locale;
        return $this->attributes[$column];
    }
    
}
