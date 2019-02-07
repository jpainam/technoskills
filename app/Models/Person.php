<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';
    
    public function profils(){
        return $this->belongsToMany(Profil::class, PersonProfil::class);
    }
    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function competences(){
        return $this->belongsToMany(Competence::class, 'person_competence')
                ->withPivot('certification')->withTimestamps();
    }
    public function section(){
        return $this->belongsTo(Section::class);
    }
    public function agence(){
        return $this->belongsTo(Agency::class);
    }
    public function group(){
        return $this->belongsTo(Group::class);
    }
     public function society(){
        return $this->belongsTo(Society::class);
    }
}
