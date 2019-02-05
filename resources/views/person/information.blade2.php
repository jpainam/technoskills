<div class="row">
    <div class="col-md-3"> <span class="text-warning">Matricule</span><br/>
        <span>{{ $person->matric or '' }}</span></div>
    <div class="col-md-3"><span class="text-warning">Nom</span><br/>
        <span>{{ $person->firstname or '' }}</span></div>
    <div class="col-md-3"><span class="text-warning">Pr&eacute;nom</span><br/>
        <span>{{ $person->lastname or '' }}</span></div>
    <div class="col-md-3"><span class="text-warning">Date Naiss.</span><br/>
        <span>{{ $person->birthday or '' }}</span></div>
</div>
<hr/>
<div class="row">
    <div class="col-md-3"> <span class="text-warning">Email</span><br/>
        <span>{{ $person->email or '' }}</span></div>
    <div class="col-md-3"><span class="text-warning">Soci&eacute;t&eacute;</span><br/>
        <span>{{ $person->society->libelle or '' }}</span></div>
    <div class="col-md-3"><span class="text-warning">Groupe</span><br/>
        <span>{{ $person->groupe->libelle or '' }}</span></div>
    <div class="col-md-3"><span class="text-warning">Agence</span><br/>
        <span>{{ $person->agency->libelle or '' }}</span></div>
</div>
<hr/>
<div class="row">
    <div class="col-md-3"> <span class="text-warning">Section</span><br/>
        <span>{{ $person->section->libelle or '' }}</span></div>
    <div class="col-md-3"><span class="text-warning">Nationalit&eacute;</span><br/>
        <span>{{ $person->country->name_fr or '' }}</span></div>
    <div class="col-md-3"><span class="text-warning">T&eacute;l&eacute;phone</span><br/>
        <span>{{ $person->phone or '' }}</span></div>
    <div class="col-md-3"><span class="text-warning">Langues</span></div>
</div>