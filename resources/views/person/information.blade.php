<style>
    .avatar-user {
        border: 1px dashed #ccc;
        height: 130px;
        width: 135px;
        border-radius: 8px;
        overflow: hidden;
    }
    .avatar-user img {
        height: 100%;
        width: 100%;
        border-radius: 8px;
    }
    
    .small-table tr{
        font-size: 11px;
    }
    
    .small-table tr th, 
    .small-table tr td{
        font-size: 13px !important;
    }
</style>
<div class="row">
    <div class="col-md-3">
        <div class="avatar-user">
            <img src="https://www.cfaoskills.com/assets/img/avatars/avatar_default.png">
        </div>
    </div>
    <div class="col-md-9">
         <div class="row">
            <div class="col-md-4"><span class="text-warning">Nom</span><br/>
                <span>{{ $person->firstname or '' }}</span>
            </div>
            <div class="col-md-4"><span class="text-warning">Pr&eacute;nom</span><br/>
                <span>{{ $person->lastname or '' }}</span>
            </div>
            <div class="col-md-4"><span class="text-warning">Date Naiss.</span><br/>
                <span>{{ $person->birthday or '' }}</span>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-4"> <span class="text-warning">Email</span><br/>
                <span>{{ $person->email or '' }}</span>
            </div>
            <div class="col-md-4"><span class="text-warning">Groupe</span><br/>
                <span>{{ $person->groupe->libelle or '' }}</span>
            </div>
            <div class="col-md-4"><span class="text-warning">Soci&eacute;t&eacute;</span><br/>
                <span>{{ $person->society->libelle or '' }}</span>
            </div>
        </div>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-3"> <span class="text-warning">Matricule</span><br/>
        <span>{{ $person->matric or '' }}</span>
    </div>
    
    <div class="col-md-3"><span class="text-warning">Agence</span><br/>
        <span>{{ $person->agency->libelle or '' }}</span>
    </div>
    <div class="col-md-3"> <span class="text-warning">Section</span><br/>
        <span>{{ $person->section->libelle or '' }}</span>
    </div>
    <div class="col-md-3"><span class="text-warning">Fonction</span><br/>
        <span></span>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-3"><span class="text-warning">T&eacute;l&eacute;phone</span><br/>
        <span>{{ $person->phone or '' }}</span>
    </div>
    <div class="col-md-3"><span class="text-warning">Adresse</span><br/>
        <span>{{ $person->address or '' }}</span>
    </div>
    <div class="col-md-3"> <span class="text-warning">Ambition</span><br/>
        <span></span>
    </div>
    <div class="col-md-3"><span class="text-warning">Potentiel</span><br/>
        <span></span>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-3"><span class="text-warning">Langues</span></div>
    <div class="col-md-3"><span class="text-warning">Nationalit&eacute;</span><br/>
        <span>{{ $person->country->name_fr or '' }}</span>
    </div>
    <div class="col-md-6"><span class="text-warning">Langues Parl&eacute;es</span><br/>
        <span></span>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-3"><span class="text-warning">NB. Enfant</span>
        <span></span>
    </div>
    <div class="col-md-3"><span class="text-warning">Pes&eacute;e</span><br/>
        <span></span>
    </div>
    <div class="col-md-3"><span class="text-warning">Expiration du Passport</span><br/>
        <span></span>
    </div>
    <div class="col-md-3"><span class="text-warning">Passport</span><br/>
        <span></span>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-3"><span class="text-warning">Contrat</span>
        <span></span>
    </div>
    <div class="col-md-3"><span class="text-warning">Fin de contrat</span><br/>
        <span></span>
    </div>
    <div class="col-md-3"><span class="text-warning">Review Positionnement</span><br/>
        <span></span>
    </div>
    <div class="col-md-3"><span class="text-warning">M&eacute;mo</span><br/>
        <span></span>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-3"><span class="text-warning">Est Manager</span>
        <div class="togglebutton">
            <label>
              <input type="checkbox" checked="">
              <span class="toggle"></span>
            </label>
      </div>
    </div>
    <div class="col-md-3"><span class="text-warning">Manager</span><br/>
        <span></span>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header card-header-text">
              <div class="card-text">
                  <h4 class="card-title"><i class="fa fa-users"></i>Liste des profiles</h4>
              </div>
            </div>
            <div class="card-body">
                <table class="table small-table" style="font-size: 12px;">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Titre du profile</th>
                            <th>Niveau</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="card">
            <div class="card-header card-header-text">
              <div class="card-text">
                  <h4 class="card-title"><i class="fa fa-users"></i>Liste des postes</h4>
              </div>
            </div>
            <div class="card-body">
                <table class="table small-table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Poste</th>
                            <th>Intitul&eacute; bulletin</th>
                            <th>Soci&eacute;t&eacute;</th>
                            <th>Date d&eacute;but</th>
                            <th>Date Fin</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

