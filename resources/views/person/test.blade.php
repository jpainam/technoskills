<div class="row">
    <div class="col-md-9">
        <h3 class="text-center text-muted">Liste des testes</h3>
    </div>

    <div class="col-md-3">
        <button class="btn btn-primary" id="btnAddComptence"> <span class="fa fa-plus"> </span> &nbsp;Ajouter</button>
    </div>

</div>
<div class="material-datatables">
    <table id="testTable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Libellé du test</th>
            <th>Note obtenue</th>
            <th>Attribué par</th>
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

        var testTable = $('#testTable').DataTable({
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