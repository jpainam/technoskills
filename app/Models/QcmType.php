<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QcmType extends Model {

    protected $table = 'qcm_type';

    public function getDescriptionAttribute() {
        $locale = \App::getLocale();
        $column = 'description_' . $locale;
        return $this->attributes[$column];
    }

}
