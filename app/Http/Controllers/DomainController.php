<?php


namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\Http\Request;

class DomainController {
         public function __construct() {
        $this->middleware('auth');
    }
    
}
