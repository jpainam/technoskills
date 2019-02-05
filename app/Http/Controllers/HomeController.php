<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $trainings = Training::get()->where('end', '>=', date('Y-m-d', time()));
        return view('home.index', array(
            'trainings' => $trainings
        ));
    }

}
