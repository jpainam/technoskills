<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;


use App\Models\Domain;
use Illuminate\Http\Request;

class ModeleController  extends Controller{
     public function __construct() {
        $this->middleware('auth');
    }
    
   public function index(){
       return view('modele.index');
   }
}
