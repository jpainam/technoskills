@extends('master')
@section("pagetitle")
{{ __('title.competence') }}
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
    <div class="col-md-7">
        <div class="card">
            <div class="card-header card-header-primary card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">apps</i>
                </div>
            </div>
            <div class="card-body">

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
                                <td>{{ $c->level->libelle }}</td>
                                <td>{{ $c->type }}</td>
                                <td>{{ $c->type }}</td>
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
  $(document).ready(function() {
      $('#competenceTable').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records"
        }
      });

      var table = $('#competenceTable').DataTable();

      // Edit record
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');
        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
      });

      // Delete a record
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
      });

      //Like record
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });
    });
</script>
@endsection