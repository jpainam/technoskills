<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model {

    public function getDescriptionAttribute() {
        $locale = \App::getLocale();
        $column = "description_" . $locale;
        return $this->attributes[$column];
    }

    public function personnes() {
        return $this->belongsToMany(Person::class);
    }

    public function level() {
        return $this->belongsTo(Level::class);
    }

}
