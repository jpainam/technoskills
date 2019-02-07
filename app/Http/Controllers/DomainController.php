<?php


namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\Http\Request;

class DomainController extends Controller{
    public function __construct() {
        $this->middleware('auth');
    }
    
   public function index(){
       return view('domain.index');
   }
}
