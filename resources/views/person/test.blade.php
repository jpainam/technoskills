<div class="row">
    <div class="col-md-9"></div>
    <div class="col-md-3">
        <button class="btn btn-primary btn-sm" id="btnAddComptence"><span class="fa fa-plus">&nbsp;Ajouter</button>
    </div>
</div>
<div class="material-datatables">
    <table id="testTable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>{{ __('labels.description') }}</th>
                <th>{{ __('labels.grade') }}</th>
                <th>{{ __('labels.by') }}</th>
                <th>{{ __('labels.date') }}</th>
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
            "columnDefs": [
                {
                    "targets": [2, 3, 4],
                    "orderable": false
                }
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Rechercher"
            }

        });
    });
</script>