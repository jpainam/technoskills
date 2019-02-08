@extends('master')
@section('pagetitle')
Profil
@endsection
@section('content')
<style>
    div.dataTables_length {
        display: none;
    }
    #profilTable tr{
        cursor: pointer;
    }
    #profilTable .selected{
        background-color: #9c27b0;
    }
</style>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <!-- div class="card-header card-header-primary card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">content_paste</i>
                </div>
            </div -->
            <div class="card-body">
                <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <div class="material-datatables">
                    <table id="profilTable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>{{ __('labels.abbreviation') }}</th>
                                <th>{{ __('labels.description') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($profils as $p)
                            <tr>
                                 <td>{{ $p->id }}</td>
                                <td>{{ $p->abbreviation }}</td>
                                <td> {{ $p->description }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header card-header-tabs card-header-primary" style="padding-bottom: 0px; padding-top: 0px;">
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <span class="nav-tabs-title" style="padding: 0px;">D&eacute;tails:</span>
                        <ul class="nav nav-tabs" data-tabs="tabs">
                           
                            <li class="nav-item">
                                <a class="nav-link active" href="#competences" data-toggle="tab">
                                    <i class="material-icons">apps</i> {{ __('labels.competences') }}
                                    <div class="ripple-container"></div>
                                </a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="#persons" data-toggle="tab">
                                    <i class="material-icons">people</i> {{ __('labels.persons') }}
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="competences">
                        @include("profil.competence")
                    </div>
                    <div class="tab-pane" id="persons">
                        @include("profil.person")
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        var profilTable = $('#profilTable').DataTable({
            "columnDefs": [
                {
                    "targets": [0],
                    "visible": false,
                    "searchable": false
                }
            ],
            scrollCollapse: true,
            paging: false,
            info: false,
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records"
            }
        });

        profilTable.on('click', 'td', function () {
            $("#profilTable tr").removeClass("selected");
            $tr = $(this).closest('tr');

            $tr.addClass("selected");
            var tblData = profilTable.rows('.selected').data();
            var tmpData = tblData[0];
            $.ajax({
                type: 'POST',
                url: "{{ URL::to('/profil/show') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    dd: tmpData[0]
                },
                success: function (msg) {
                    if (msg.success) {
                        $("#competences").html(msg.competences);
                        $("#persons").html(msg.persons);
                    }
                }
            });
        });          
    });
</script>
@endsection