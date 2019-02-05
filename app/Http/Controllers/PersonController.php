<?php


namespace App\Http\Controllers;
use App\Models\Person;
use \Illuminate\Support\Facades\Input;
/**
 * Description of Personne
 *
 * @author Paul
 */
class PersonController extends Controller{
    
     public function __construct() {
        //$this->middleware('auth');
    }
    
    public function index(){
        
        $persons = Person::all();
        $p = Person::find($persons[0]->id);
        ##dd(\Illuminate\Support\Facades\DB::getQueryLog());
        ##dd($p->competences);
        return view('person.index', ['persons' => $persons, 
            "person" => $p]);
    }
    public function show(){
        $id = Input::get("dd");
        $person = Person::find($id);
        $infoView = view("person.information", ["person" => $person])->render();
        $competenceView = view("person.competence", ["competences" => $person->competences])->render();
        return response()->json(["success" => true, "information" => $infoView, 
            "competences" => $competenceView]);
    }
    public function add(){
        return view('person.add');
    }
    public function addValidate(){
        
    }
}
