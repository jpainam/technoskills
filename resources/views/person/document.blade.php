<div class="row">
    <div class="col-md-9">
        <h3 class="text-center text-muted">Liste des documents</h3>
    </div>

    <div class="col-md-3">
        <button class="btn btn-primary" id="btnAddComptence"> <span class="fa fa-plus"> </span> &nbsp;Ajouter</button>
    </div>

</div>
<div class="material-datatables">
    <table id="documentTable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Date</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>


</div>
<script>
    $(document).ready(function () {

        var documentTable = $('#documentTable').DataTable({
            "pagingType": "first_last_numbers",
            info: false,
            pageLength: 15,
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