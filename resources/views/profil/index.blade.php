@extends('master')
@section('pagetitle')
Profil
@endsection
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header card-header-primary card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">content_paste</i>
                </div>
            </div>
            <div class="card-body">
                <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <div class="material-datatables">
                    <table id="profilTable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                            <tr>
                                <th>{{ __('labels.abbreviation') }}</th>
                                <th>{{ __('labels.description') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($profils as $p)
                            <tr>
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
    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-tabs card-header-primary">
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <span class="nav-tabs-title">D&eacute;tails:</span>
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
        $('#profilTable').DataTable({
            //"pagingType": "full_numbers",
            //"lengthMenu": [
            //    [10, 25, 50, -1],
             //   [10, 25, 50, "All"]
            //],
            scrollCollapse: true,
            paging: false,
            info: false,
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records"
            }
        });

        var table = $('#datatable').DataTable();

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