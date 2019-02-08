@extends('master')
@section("pagetitle")
Ajouter une civilit&eacute;
@endsection
@section('content')
<div class="col-md-10 col-12 mr-auto ml-auto">
    <!--      Wizard container        -->
    <div class="wizard-container">
        <div class="card card-wizard" data-color="orange" id="wizardProfile">
            <form action="" method="">
                <div class="wizard-navigation">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="#about" data-toggle="tab" role="tab">
                                Information
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#account" data-toggle="tab" role="tab">
                                Appartenances
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#address" data-toggle="tab" role="tab">
                                Profils & Postes
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="about">
                            <h5 class="info-text"> Remplis tous les champs obligatoires</h5>
                            <div class="row justify-content-center">
                                <div class="col-sm-3">
                                    <div class="picture-container">
                                        <div class="picture">
                                            <img src="{{ URL::to('/img/default-avatar.png') }}" class="picture-src" id="wizardPicturePreview" title="" />
                                            <input type="file" id="wizard-picture">
                                        </div>
                                        <h6 class="description">Choisir une photo</h6>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">clear_all</i>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            {{--<label for="matricule" class="bmd-label-floating">Matricule</label>--}}
                                            {{--<input type="text" class="form-control" id="matricule" name="matricule">--}}
                                            <select class="form-control selectpicker" data-style="btn btn-link" name="matricule" id="matricule">
                                                <option>Matricule</option>
                                                <option>Mr</option>
                                                <option>M</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="birthday" class="bmd-label-floating">Date de Naissance</label>
                                            <input type="text" id="birthday" name="birthday" class="form-control datepicker" >
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm-3">

                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">person</i>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="firstname" class="bmd-label-floating">Nom</label>
                                            <input type="text" class="form-control" id="firstname" name="firstname" required>
                                        </div>
                                    </div>

                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">email</i>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="bmd-label-floating">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm-3">
                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">contact_mail</i>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname" class="bmd-label-floating">Pr&eacute;nom</label>
                                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                                        </div>
                                    </div>

                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">phone</i>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="bmd-label-floating">T&eacute;l&eacute;phone</label>
                                            <input type="text" class="form-control" id="phone" name="phone" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">clear_all</i>
                                                <span class="text-left text-muted" style="font-size: 13px;">Fonction</span>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control selectpicker" data-style="btn btn-link" name="fonction" id="fonction">
                                                <option>Fcontion</option>
                                                <option>Mr</option>
                                                <option>M</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">clear_all</i>
                                                <span class="text-left text-muted" style="font-size: 13px;">Pays</span>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control selectpicker" data-style="btn btn-link" name="pays" id="pays">
                                                <option>Pays</option>
                                                <option>Mr</option>
                                                <option>M</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5">
                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">person</i>
                                                <span class="text-left text-muted" style="font-size: 13px;">Situation Matrimoniale</span>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control selectpicker" data-style="btn btn-link" name="SituationMatrimoniale" id="SituationMatrimoniale">
                                                <option></option>
                                                <option>Mr</option>
                                                <option>M</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7 col-xs-12">
                                            <div class="input-group form-control-lg">
                                                <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="dateExpirationPassport" class="bmd-label-floating">D. d'expiration Passport</label>
                                                    <input type="text" id="dateExpirationPassport" name="dateExpirationPassport" class="form-control datepicker" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-xs-12">
                                            <div class="input-group form-control-lg">
                                                <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">assignment</i>
                                            </span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="numberPassport" class="bmd-label-floating">N° Passport</label>
                                                    <input type="text" id="numberPassport" name="numberPassport" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm-4">
                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">clear_all</i>
                                                <span class="text-left text-muted" style="font-size: 13px;">Nombre d'enfant</span>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control selectpicker" data-style="btn btn-link" name="nbEnfant" id="nbEnfant">
                                                <option></option>
                                                <option>Mr</option>
                                                <option>M</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">assignment</i>
                                                <span class="text-left text-muted" style="font-size: 13px;">Passport</span>
                                            </span>

                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                        <div>
                                            <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Ajouter fichier</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="..." />
                                            </span>
                                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">email</i>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="address" class="bmd-label-floating">Adresse</label>
                                            <input type="text" class="form-control" id="address" name="address" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="account">
                            <h5 class="info-text"> Remplis tous les champs obligatoires</h5>
                            <div class="row justify-content-center">

                                <div class="col-sm-3">
                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">clear_all</i>
                                                <span class="text-left text-muted" style="font-size: 13px;">Langue</span>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control selectpicker" data-style="btn btn-link" name="langue" id="langue">
                                                <option></option>
                                                <option>Mr</option>
                                                <option>M</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-bookmark"></i> &nbsp;
                                                <span class="text-left text-muted" style="font-size: 13px;">Ambition</span>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control selectpicker" data-style="btn btn-link" name="ambition" id="ambition">
                                                <option></option>
                                                <option>Mr</option>
                                                <option>M</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-home"></i> &nbsp;
                                                <span class="text-left text-muted" style="font-size: 13px;">Agence</span>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control selectpicker" data-style="btn btn-link" name="agence" id="agence">
                                                <option></option>
                                                <option>Mr</option>
                                                <option>M</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-home"></i> &nbsp;
                                                <span class="text-left text-muted" style="font-size: 13px;">Société</span>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control selectpicker" data-style="btn btn-link" name="societe" id="societe">
                                                <option></option>
                                                <option>Mr</option>
                                                <option>M</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-book"></i> &nbsp;
                                                <span class="text-left text-muted" style="font-size: 13px;">Potentiel</span>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control selectpicker" data-style="btn btn-link" name="potentiel" id="potentiel">
                                                <option></option>
                                                <option>Mr</option>
                                                <option>M</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-bookmark"></i> &nbsp;
                                                <span class="text-left text-muted" style="font-size: 13px;">Review Positionnement</span>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control selectpicker" data-style="btn btn-link" name="reviewPositionnement" id="reviewPositionnement">
                                                <option> </option>
                                                <option>Mr</option>
                                                <option>M</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-users"></i>&nbsp;
                                                <span class="text-left text-muted" style="font-size: 13px;">Groupe</span>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control selectpicker" data-style="btn btn-link" name="groupe" id="groupe">
                                                <option> </option>
                                                <option>Mr</option>
                                                <option>M</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">assignment</i>
                                                <span class="text-left text-muted" style="font-size: 13px;">Contrat</span>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control selectpicker" data-style="btn btn-link" name="contrat" id="contrat">
                                                <option> </option>
                                                <option>Mr</option>
                                                <option>M</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">clear_all</i>
                                                <span class="text-left text-muted" style="font-size: 13px;">Pésée/Grading</span>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control selectpicker" data-style="btn btn-link" name="pense" id="pense">
                                                <option> </option>
                                                <option>Mr</option>
                                                <option>M</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">clear_all</i>
                                                <span class="text-left text-muted" style="font-size: 13px;">Section</span>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control selectpicker" data-style="btn btn-link" name="section" id="section">
                                                <option></option>
                                                <option>Mr</option>
                                                <option>M</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="dateEndContrat" class="bmd-label-floating">Date de fin de contrat</label>
                                            <input type="text" id="dateEndContrat" name="dateEndContrat" class="form-control datepicker" >
                                        </div>
                                    </div>
                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">person</i>
                                                <span class="text-left text-muted" style="font-size: 13px;">Manager</span>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control selectpicker" data-style="btn btn-link" name="manager" id="manager">
                                                <option></option>
                                                <option>Mr</option>
                                                <option>M</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="input-group form-control-lg">
                                        {{--<div class="input-group-prepend">--}}
                                            {{--<span class="input-group-text">--}}
                                                {{--<i class="material-icons">date_range</i>--}}
                                            {{--</span>--}}
                                        {{--</div>--}}
                                        <div class="form-group">
                                            <label for="memo" class="bmd-label-floating"><i class="fa fa-book"></i> Memo</label>
                                            <textarea name="memo" id="memo" cols="30" rows="3" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group form-control-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-users"> </i>&nbsp; Langues parlées
                                            </span>
                                        </div>
                                        <div class="form-check mr-auto">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" required> Français
                                                <span class="form-check-sign">
                                                  <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check mr-auto">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" required> Anglais
                                                <span class="form-check-sign">
                                                  <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check mr-auto">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" required> Espagnole
                                                <span class="form-check-sign">
                                                  <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-graduation-cap"></i>&nbsp; Manager
                                        </span>
                                    </div>
                                    <div class="togglebutton">
                                        <label>
                                            <input type="checkbox">
                                            <span class="toggle"></span>
                                            Toggle is off
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="address">
                            <h5 class="info-text"> Cliquer sur Ajouter pour ajouter des profils et poste</h5>
                            <div class="row justify-content-center">

                                <div class="row">
                                    <div class="col-md-5 col-xs-12" style="border-right: 1px solid #ccc;">
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <span class="badge badge-pill badge-primary"><i class="fa fa-tags"></i> Profi</span>
                                            </div>
                                            <div class="timeline-body">
                                                <div class="row">
                                                    <div class="col-md-6 ml-auto">
                                                        <a class="badge badge-success badge-pill text-white"><i class="fa fa-plus"></i> Ajouter</a>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                    <thead>
                                                        <th>Titre du profil</th>
                                                        <th>Date</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-7 col-xs-12">
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <span class="badge badge-pill badge-primary"><i class="fa fa-briefcase"></i> Postes</span>
                                            </div>
                                            <div class="timeline-body">
                                                <div class="col-md-5 ml-auto">
                                                    <a class="badge badge-success badge-pill text-white"><i class="fa fa-plus"></i> Ajouter</a>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <th>Poste</th>
                                                            <th>Intitulé bulletin</th>
                                                            <th>Société</th>
                                                            <th>Date début</th>
                                                            <th>Date fin</th>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="mr-auto">
                        <input type="button" class="btn btn-previous btn-fill btn-default btn-wd disabled" name="previous" value="Retourner">
                    </div>
                    <div class="ml-auto">
                        <input type="button" class="btn btn-next btn-fill btn-rose btn-wd" name="next" value="Suivant">
                        <input type="button" class="btn btn-finish btn-fill btn-rose btn-wd" name="finish" value="Valider" style="display: none;">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </div>
    <!-- wizard container -->
</div>
@endsection
@section("pagescript")
<script>
    $(document).ready(function () {
        // Initialise the wizard
        demo.initMaterialWizard();
        setTimeout(function () {
            $('.card.card-wizard').addClass('active');
        }, 600);
        // initialise Datetimepicker and Sliders
        md.initFormExtendedDatetimepickers();
        if ($('.slider').length != 0) {
            md.initSliders();
        }


        $('#birthday').blur(function () {
            if ($(this).val() != '') {
                $(this).parent().addClass('is-filled');
            }
        });
        $('#dateExpirationPassport').blur(function () {
            if ($(this).val() != '') {
                $(this).parent().addClass('is-filled');
            }
        });
        $('#dateEndContrat').blur(function () {
            if ($(this).val() != '') {
                $(this).parent().addClass('is-filled');
            }
        });
    });
</script>
@endsection

<style>
    .table th,
    .table td {
        font-size: 13px !important;
    }
</style>