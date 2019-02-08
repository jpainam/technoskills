<div class="material-datatables">
    <table id="personTable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
        <thead>
            <tr>
                <th>{{ __('labels.firstname') }}</th>
                <th>{{ __('labels.lastname') }}</th>
            </tr>
        </thead>
        <tbody>
            @isset($persons)
            @foreach($persons as $p)
            <tr>
                <td>{{ $p->firstname }}</td>
                <td>{{ $p->lastname }}</td>
            </tr>
            @endforeach
            @endisset
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function () {
        var personTable = $('#personTable').DataTable({
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