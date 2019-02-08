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
    public function show(){
        $id = Input::get("dd");
        $qcm = Qcm::find($id);
        $competenceView = view('qcm.competence', array(
            'competences' => $qcm->competences
        ))->render();
        $personView = view('qcm.person', array(
            'persons' => $qcm->persons
        ))->render();
        $potentielView = view('qcm.potentiel', array(
            'potentiels' => $qcm->potentiels
        ))->render();
        return response()->json(["success" => true, 
            "competences" => $competenceView, 
            "persons" => $personView,
            "potentiels" => $potentielView]);
    }

}
