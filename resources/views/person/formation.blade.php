<div class="row">
    <div class="col-md-3 ml-auto">
        <button class="btn btn-primary" id="btnAddComptence"> <span class="fa fa-plus"> </span> &nbsp;Ajouter</button>
    </div>

</div>
<div id="accordion" role="tablist">
    <div class="card card-collapse">
        <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Historiques des formations
                    <i class="material-icons">keyboard_arrow_down</i>
                </a>
            </h5>
        </div>

        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">

                <div class="material-datatables">
                    <table id="formationTable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Titre de la formation</th>
                                <th>Niveau</th>
                                <th>Priorité</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {

        var formationTable = $('#formationTable').DataTable({
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

        formationTable.on('click', 'td', function () {
            $("#formationTable tr").removeClass("selected");
            $tr = $(this).closest('tr');

            $tr.addClass("selected");
            var tblData = competenceTable.rows('.selected').data();
            var tmpData = tblData[0];
            console.log(tmpData);
        });
    });
</script>