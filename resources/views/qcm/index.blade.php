@extends('master')
@section('pagetitle')
{{ __('title.qcm') }}
@endsection
@section('content')
<style>
    div.dataTables_length {
        display: none;
    }
    #qcmTable tr{
        cursor: pointer;
    }
    #qcmTable .selected{
        background-color: #9c27b0;
    }
</style>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <!-- div class="card-header card-header-primary card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">timeline</i>
                </div>
            </div -->
            <div class="card-body">
                <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <div class="material-datatables">
                    <table id="qcmTable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>{{ __('labels.description') }}</th>
                                <th>{{ __('labels.type') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($qcm as $q)
                            <tr>
                                <td> {{ $q->id }} </td>
                                <td> {{ $q->description }} </td>
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
       var qcmTable = $('#qcmTable').DataTable({
           "columnDefs": [
                {
                    "targets": [0],
                    "visible": false,
                    "searchable": false
                }, {
                    "targets": 2,
                    "orderable": false
                }
            ],
            pagingType: "numbers",
            scrollCollapse: true,
            info: false,
            pageLength: 15,
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records"
            }
        });

         qcmTable.on('click', 'td', function () {
            $("#qcmTable tr").removeClass("selected");
            var $tr = $(this).closest('tr');

            $tr.addClass("selected");
            var tblData = qcmTable.rows('.selected').data();
            var tmpData = tblData[0];
            $.ajax({
                type: 'POST',
                url: "{{ URL::to('/qcm/show') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    dd: tmpData[0]
                },
                success: function (msg) {
                    if (msg.success) {
                        $("#competences").html(msg.competences);
                        $("#persons").html(msg.persons);
                        $("#potentiels").html(msg.potentiels);
                    }
                }
            });
        });          
    });
</script>
@endsection