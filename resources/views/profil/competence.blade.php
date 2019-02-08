<div class="material-datatables">
    <table id="competenceTable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
        <thead>
            <tr>
                <th>Libell&eacute; de la comp&eacute;tence</th>
                <th>Niveau</th>
            </tr>
        </thead>
        <tbody>
            @isset($competences)
            @foreach($competences as $c)
            <tr>
                <td>{{ $c->description }}</td>
                <td> {{ $c->level->description }}</td>
            </tr>
            @endforeach
            @endisset
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function () {
        var competenceTable = $('#competenceTable').DataTable({
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