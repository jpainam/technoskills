<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use \Illuminate\Support\Facades\Input;

class ProfilController extends Controller
{
     public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $profils = Profil::all();
        //dd($profils);
        return view('profil.index', array(
            'profils' => $profils
        ));
    }

    public function show(){
         $id = Input::get("dd");
         $profil = Profil::find($id);
        $competenceView =  view('profil.competence', array(
            'competences' => $profil->competences
        ))->render();
        $personView = view('profil.person', array(
            'persons' => $profil->persons
        ))->render();
        return response()->json(["success" => true,
            "competences" => $competenceView, 
            'persons' => $personView]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    #public function show(Profil $profil)
    #{
        //
    #}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(Profil $profil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profil $profil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        //
    }
}
