@extends('master')
@section("pagetitle")
{{ __('title.training') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-5 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="toolbar">
                </div>
                <div class="material-datatables">
                    <table id="trainingTable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" 
                           style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Code</th>
                                <th>Title</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <!--  end card  -->
    </div>
    <!-- end col-md-4 -->
    <div class="col-lg-7 col-md-12">
    </div>
</div>
<script>
    $(document).ready(function () {
        function format(d) {
            // `d` is the original data object for the row
            var $str = '<table cellpadding="5" cellspacing="0" border="0" class="display nowrap">';
            var $l = d.trainings.length;
            var $i = 0;
            for ($i = 0; $i < $l; $i++) {
                var $f = d.trainings[$i];
                var $dd = $f.start;
                var $df = $f.end;
                $dd = $dd.split('-');
                $df = $df.split('-');
                $str += '<tr>' +
                        '<td align="center"><label class="radio">' +
                        '<input type="radio" onclick="openDetails(' + $f.id + ')" name="idformation" value="' + $f.id + '"><i></i></label></td>' +
                        '<td style="width:100px">Période : </td>' +
                        '<td>' + $dd[2] + '/' + $dd[1] + '/' + $dd[0] + '</td>' +
                        '<td>' + $df[2] + '/' + $df[1] + '/' + $df[0] + '</td>' +
                        '<td><i class="fa fa-external-link txt-color-red">    </i>    ' +
                        '<a onclick="openDetails(' + $f.id + ')" href="javascript:void(0);">Details</a>' +
                        '</td>' +
                        '</tr>' +
                        '<tr style="border-bottom:2px solid green"><td></td>' +
                        '<td colspan="2">Lieu de formation</td>' +
                        '<td colspan="2">' + $f.place + '</td>' +
                        '</tr>';
            }
            return '</table>' + $str;
        }
        ;
        var table = $('#trainingTable').DataTable({
            "ajax": "{{ route('training.jsonindex') }}",
            "columns": [
                {
                    "className": 'details-control',
                    "orderable": false,
                    "data": null,
                    "defaultContent": ''
                },
                {"data": "code"},
                {"data": "title"}
            ],
            "pagingType": "numbers",
            pageLength: 40,
            info:false,
            "order": [[1, 'asc']]
        });
        // Add event listener for opening and closing details
        $('#trainingTable tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = table.row(tr);

            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            } else {
                // Open this row
                row.child(format(row.data())).show();
                tr.addClass('shown');
            }
        });
    });
</script>
@endsection