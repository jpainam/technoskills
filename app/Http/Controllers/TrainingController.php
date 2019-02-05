<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainingcategory;
use Illuminate\Http\JsonResponse;

class TrainingController extends Controller
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
        return view("training.index");
    }
    
     public function jsonindex() {
        $json = array();
        #$trainingcategories = Trainingcategory::all();
        #$trainingcategories->each(function($tc){
        #    $trainings = $tc->trainings();
        #    if(count($trainings->count() > 0)){
        #        $tc['training'] = 
        #    }
        #});
        #foreach ($trainingcategories as $ft) {
        #    $formations = $ft->each($callback);
        #    if (count($formations) > 0) {
        #        $ft["formations"] = $formations;
        #        $ft["TITRE"] .= "<br><small class='text-muted'><i>" . count($formations) . " formation(s)<i></small>";
        #        $json[] = $ft;
        #    }
        #}
        $data = Trainingcategory::with('trainings')->get();
        return new JsonResponse(['data' => $data]);
        #print response()->json(array("data" => array_values($json)));
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
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function show(Formation $formation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit(Formation $formation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formation $formation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formation $formation)
    {
        //
    }
}
