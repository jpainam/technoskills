<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    public function getDescriptionAttribute(){
        $locale = \App::getLocale();
        $column = 'description_'.$locale;
        return $this->attributes[$column];
    }
    public function competences(){
         return $this->belongsToMany(Competence::class, ProfilCompetence::class);
    }
}
