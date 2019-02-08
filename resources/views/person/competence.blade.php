<div class="row">
    <div class="col-md-3 ml-auto">
        <button class="btn btn-primary" id="btnAddComptence"> <span class="fa fa-plus"> </span> &nbsp;Ajouter</button>
    </div>

</div>
<div class="material-datatables">
    <table id="competenceTable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th>Libell&eacute; de la comp&eacute;tence</th>
                <th>Niveau</th>
                <th>Certification</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @isset($competences)
            @foreach($competences as $c)
            <tr>
                <td>{{ $c->pivot->personne_id }}</td>
                <td>{{ $c->pivot->competence_id }}</td>
                <td>{{ $c->description }}</td>
                <td> {{ $c->level->description }}</td>
                @if($c->pivot->certification == 'CE')
                <td> {{ __('competence.certified') }} </td>
                @elseif($c->pivot->certification == 'NC')
                <td> {{ __('competence.notcertified') }} </td>
                @elseif($c->pivot->certification == 'EC')
                <td> {{ __('competence.currently') }} </td>
                @else
                <td> {{ __('competence.tocertify') }} </td>
                @endif
                <td>
                    <div class="dropdown pull-left">
                        <button type="button" class="dropdown-toggle" style="background-color: transparent;border: none;" 
                                data-toggle="dropdown" aria-expanded="false">
                           <!-- i class="fa fa-cog fa-2x"> </i --> 
                            <span class="caret"></span>
                            <div class="ripple-container"></div></button>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu" x-placement="top-end" sytle="color: #000;" x-out-of-boundaries="">
                            <li><a href="javascript:void(0);" style="color: #111">Certifier</a></li>
                            <li><a href="javascript:void(0);" style="color: #111">Info</a></li>
                            <li class="divider"> </li>
                            <li> <a href="javascript:void(0);" style="color: #111">Supprimer</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            @endforeach
            @endisset
        </tbody>
    </table>
</div>
<!--modal add competence-->
<div class="modal fade" id="addComptence" tabindex="-1" role="dialog" aria-labelledby="addComptenceLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ajouter une compétence</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">clear</i>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="comboCompetence">Compétences</label>
                    <select class="form-control selectpicker" data-style="btn btn-link" id="comboCompetence" name="comboCompetence">
                        <option>Compétence</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link">Ajouter</button>
                <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {

        $('#btnAddComptence').click(function () {
            $('#addComptence').modal('show');
        });
        var competenceTable = $('#competenceTable').DataTable({
            "columnDefs": [{
                    "targets": 0,
                    "visible": false,
                    "searchable": false
                }, {
                    "targets": 1,
                    "visible": false,
                    "searchable": false
                },  {
                    "targets": [4,5],
                    "searchable": false,
                    "orderable": false
                }],
            "pagingType": "first_last_numbers",
            info: false,
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Rechercher"
            }

        });
    });
</script>