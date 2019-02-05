<?php

namespace App\Http\Controllers;
use App\Models\Qcm;
use \Illuminate\Support\Facades\Input;

class QcmController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(){
        $qcm = Qcm::all();
        return view('qcm.index', array(
            'qcm' => $qcm
        ));
    }

}
