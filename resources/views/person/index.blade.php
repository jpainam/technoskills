@extends('master')
@section("pagetitle")
Personnes
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
        <div class="card">
            <div class="card-header card-header-tabs card-header-primary">
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <span class="nav-tabs-title">D&eacute;tails:</span>
                        <ul class="nav nav-tabs" data-tabs="tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#information" data-toggle="tab">
                                    <i class="material-icons">person</i> Informations
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#competences" data-toggle="tab">
                                    <i class="material-icons">apps</i> Comp&eacute;tences
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#formations" data-toggle="tab">
                                    <i class="material-icons">work</i> Formations
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tests" data-toggle="tab">
                                    <i class="material-icons">timeline</i> Tests
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#documents" data-toggle="tab">
                                    <i class="material-icons">folder_shared</i> Documents
                                    <div class="ripple-container"></div>
                                </a>
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
