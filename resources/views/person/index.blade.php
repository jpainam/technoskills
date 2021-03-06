@extends('master')
@section("pagetitle")
{{ __('title.persons') }}
@endsection
@section('content')
<style>
    div.dataTables_length {
        display: none;
    }
    #personTable tr{
        cursor: pointer;
    }
    #personTable .selected{
        background-color: #9c27b0;
    }
    .dataTables_wrapper .dataTables_length {
        float: right;
    }
    .dataTables_wrapper .dataTables_filter {
        float: right;
        text-align: left;
    }
</style>
<div class="row">
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <div class="material-datatables">
                    <table id="personTable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" 
                           style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nom</th>
                                <th>Pr&eacute;nom</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($persons as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td> {{ $p->firstname }}</td>
                                <td> {{ $p->lastname }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--  end card  -->
    </div>
    <!-- end col-md-4 -->
    <div class="col-lg-8 col-md-12">
        <div class="col-md-12 ml-auto">
            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Ajouter</a>
            <a href="#" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Modifier</a>
            <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Supprimer</a>
        </div>
        <div class="card">
            <div class="card-header card-header-tabs card-header-primary" style="padding-bottom: 0px; padding-top: 0px;">
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <!-- span class="nav-tabs-title" style="padding: 0px;">D&eacute;tails:</span -->
                        <ul class="nav nav-tabs" data-tabs="tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#information" data-toggle="tab">
                                    <i class="material-icons">person</i>
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#competences" data-toggle="tab">
                                    <i class="material-icons">apps</i> {{ __('title.competence') }}
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#formations" data-toggle="tab">
                                    <i class="material-icons">work</i> {{ __('title.training') }}
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tests" data-toggle="tab">
                                    <i class="material-icons">timeline</i> {{ __('title.qcm') }}
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#documents" data-toggle="tab">
                                    <i class="material-icons">folder_shared</i>{{ __('title.documents') }}
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">

                                <a class="nav-link" href="#person_action" id="navbarAction" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarAction">
                                    <a class="dropdown-item" href="#"><i class="fa fa-plus"></i> Ajouter</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Modifier</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Supprimer</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="information">
                        @include("person.information")
                    </div>
                    <div class="tab-pane" id="competences">
                        @include("person.competence")
                    </div>
                    <div class="tab-pane" id="formations">
                        @include("person.formation")
                    </div>
                    <div class="tab-pane" id="tests">
                        @include("person.test")
                    </div>
                    <div class="tab-pane" id="documents">
                        @include("person.document")
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection
@section("pagescript")
<script>
    $(document).ready(function () {
        var personTable = $('#personTable').DataTable({
            /**columnDefs: [{
             orderable: false,
             className: 'select-checkbox',
             targets: 0
             }, {
             "targets": 1,
             "visible": false,
             "searchable": false
             }],
             select: {
             style: 'single',
             selector: 'td:first-child'
             },
             order: [2, 'asc'],*/
            "columnDefs": [
                {
                    "targets": [0],
                    "visible": false,
                    "searchable": false
                }
            ],
            "pagingType": "numbers",
            info: false,
            pageLength: 15,
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: ""
            }

        });

        personTable.on('click', 'td', function () {
            $("#personTable tr").removeClass("selected");
            $tr = $(this).closest('tr');

            $tr.addClass("selected");
            var tblData = personTable.rows('.selected').data();
            var tmpData = tblData[0];
            /*$.each(tblData, function (i, val) {
             tmpData = tblData[i];
             console.log(tmpData);
             });*/
            //console.log(tmpData);
            $.ajax({
                type: 'POST',
                url: "{{ URL::to('/person/show') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    dd: tmpData[0]
                },
                success: function (msg) {
                    if (msg.success) {
                        $("#information").html(msg.information);
                        $("#competences").html(msg.competences);
                    }
                }
            });
        });
    });
</script>
@endsection
