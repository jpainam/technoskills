@extends('master')
@section("pagetitle")
{{ __('title.competence') }}
@endsection
@section('content')
<style>
    div.dataTables_length {
        display: none;
    }
    #competenceTable tr{
        cursor: pointer;
    }
    #competenceTable .selected{
        background-color: #9c27b0;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <!-- div class="card-header card-header-primary card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">apps</i>
                </div>
            </div -->
            <div class="card-body" style=" padding-top: 0px; padding-bottom: 0px;">

                <div class="material-datatables">
                    <table id="competenceTable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>{{ __('labels.description') }}</th>
                                <th>{{ __('labels.level') }}</th>
                                <th>{{ __('labels.knowledge') }}</th>
                                <th>{{ __('labels.skill') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($competences as $c)
                            <tr>
                                <td></td>
                                <td>{{ $c->description }}</td>
                                <td>{{ $c->level->description }}</td>
                                @if($c->type == 'CNP' or $c->type == 'CN')
                                <td><input type="checkbox" disabled="disabled" checked="checked" /></td>
                                @else
                                <td><input type="checkbox" disabled="disabled" /></td> 
                                @endif
                                @if($c->type == 'CNP' or $c->type == 'CP')
                                <td><input type="checkbox" disabled="disabled" checked="checked" /></td>
                                @else
                                <td><input type="checkbox" disabled="disabled" /></td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#competenceTable').DataTable({
            "columnDefs": [
                {
                    "targets": [0],
                    "visible": false,
                    "searchable": false
                },
                {
                    "targets": [2, 3, 4],
                    "searchable": false,
                    "orderable": false,
                }
            ],
            "pagingType": "numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            info: false,
            /*language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records"
            }*/
        });

        var table = $('#competenceTable').DataTable();

        // Edit record
        table.on('click', '.edit', function () {
            $tr = $(this).closest('tr');
            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function (e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function () {
            alert('You clicked on Like button');
        });
    });
</script>
@endsection