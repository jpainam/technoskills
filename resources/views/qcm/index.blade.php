@extends('master')
@section('pagetitle')
Test
@endsection
@section('content')

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header card-header-primary card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">timeline</i>
                </div>
            </div>
            <div class="card-body">
                <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <div class="material-datatables">
                    <table id="qcmTable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                            <tr>
                                <th>{{ __('labels.description') }}</th>
                                <th>{{ __('labels.type') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($qcm as $q)
                            <tr>
                                <td>{{ $q->description }}</td>
                                <td> {{ $q->base }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="row">
                <div class="col-md-6">
                    @include('qcm.person')
                </div>
                <div class="col-md-6">
                    @include('qcm.potentiel')
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @include('qcm.competence')
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#qcmTable').DataTable({
            //"pagingType": "full_numbers",
            //"lengthMenu": [
            //    [10, 25, 50, -1],
             //   [10, 25, 50, "All"]
            //],
            scrollCollapse: true,
            info: false,
            pageLength: 15,
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records"
            }
        });

        var table = $('#qcmTable').DataTable();

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