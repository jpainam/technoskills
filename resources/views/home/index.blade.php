@extends("master")
@section('pagetitle')
{{ __('home.title') }}
@endsection
@section("content")
<style>
    .card {
        margin-top: 0px;
    }
</style>
<div class="row">
    <div class="col-md-6 ml-auto mr-auto">
        <div class="card card-calendar">
            <div class="card-body ">
                <div id="fullCalendar"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
         <div class="material-datatables">
            <table id="nextTrainingTable" class="table table-striped table-no-bordered table-hover">
                <thead>
                    <tr><th></th><th></th><th></th><th></th></tr>
                </thead>
                <tbody>
                    @foreach($trainings as $tr)
                    <tr>
                        <td class="event-azure"></td>
                        <td>{{ $tr }}</td>
                        <td class="text-right">{{ $tr->start }} </td>
                        <td class="text-right">{{ $tr->end }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- <button type="button" class="btn btn-round btn-default dropdown-toggle btn-link" data-toggle="dropdown">
7 days
</button> -->
<div class="row">
    <div class="col-md-4">
        <div class="card card-chart">
            <div class="card-header card-header-rose" data-header-animation="true">
                <div class="ct-chart" id="websiteViewsChart"></div>
            </div>
            <div class="card-body">
                <div class="card-actions">
                    <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                    </button>
                    <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                        <i class="material-icons">refresh</i>
                    </button>
                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Change Date">
                        <i class="material-icons">edit</i>
                    </button>
                </div>
                <h4 class="card-title">Website Views</h4>
                <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-chart">
            <div class="card-header card-header-success" data-header-animation="true">
                <div class="ct-chart" id="dailySalesChart"></div>
            </div>
            <div class="card-body">
                <div class="card-actions">
                    <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                    </button>
                    <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                        <i class="material-icons">refresh</i>
                    </button>
                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Change Date">
                        <i class="material-icons">edit</i>
                    </button>
                </div>
                <h4 class="card-title">Daily Sales</h4>
                <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">access_time</i> updated 4 minutes ago
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-chart">
            <div class="card-header card-header-info" data-header-animation="true">
                <div class="ct-chart" id="completedTasksChart"></div>
            </div>
            <div class="card-body">
                <div class="card-actions">
                    <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                    </button>
                    <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                        <i class="material-icons">refresh</i>
                    </button>
                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Change Date">
                        <i class="material-icons">edit</i>
                    </button>
                </div>
                <h4 class="card-title">Completed Tasks</h4>
                <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">weekend</i>
                </div>
                <p class="card-category">Bookings</p>
                <h3 class="card-title">184</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="#pablo">Get More Space...</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">equalizer</i>
                </div>
                <p class="card-category">Website Visits</p>
                <h3 class="card-title">75.521</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">local_offer</i> Tracked from Google Analytics
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">store</i>
                </div>
                <p class="card-category">Revenue</p>
                <h3 class="card-title">$34,245</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="fa fa-twitter"></i>
                </div>
                <p class="card-category">Followers</p>
                <h3 class="card-title">+245</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                </div>
            </div>
        </div>
    </div>
</div>
<h3>Manage Listings</h3>
<br>
<div class="row">
    <div class="col-md-4">
        <div class="card card-product">
            <div class="card-header card-header-image" data-header-animation="true">
                <a href="#pablo">
                    <img class="img" src="../assets/img/card-2.jpg">
                </a>
            </div>
            <div class="card-body">
                <div class="card-actions text-center">
                    <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                    </button>
                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                        <i class="material-icons">art_track</i>
                    </button>
                    <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                        <i class="material-icons">edit</i>
                    </button>
                    <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                        <i class="material-icons">close</i>
                    </button>
                </div>
                <h4 class="card-title">
                    <a href="#pablo">Cozy 5 Stars Apartment</a>
                </h4>
                <div class="card-description">
                    The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona.
                </div>
            </div>
            <div class="card-footer">
                <div class="price">
                    <h4>$899/night</h4>
                </div>
                <div class="stats">
                    <p class="card-category"><i class="material-icons">place</i> Barcelona, Spain</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-product">
            <div class="card-header card-header-image" data-header-animation="true">
                <a href="#pablo">
                    <img class="img" src="../assets/img/card-3.jpg">
                </a>
            </div>
            <div class="card-body">
                <div class="card-actions text-center">
                    <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                    </button>
                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                        <i class="material-icons">art_track</i>
                    </button>
                    <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                        <i class="material-icons">edit</i>
                    </button>
                    <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                        <i class="material-icons">close</i>
                    </button>
                </div>
                <h4 class="card-title">
                    <a href="#pablo">Office Studio</a>
                </h4>
                <div class="card-description">
                    The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the night life in London, UK.
                </div>
            </div>
            <div class="card-footer">
                <div class="price">
                    <h4>$1.119/night</h4>
                </div>
                <div class="stats">
                    <p class="card-category"><i class="material-icons">place</i> London, UK</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-product">
            <div class="card-header card-header-image" data-header-animation="true">
                <a href="#pablo">
                    <img class="img" src="../assets/img/card-1.jpg">
                </a>
            </div>
            <div class="card-body">
                <div class="card-actions text-center">
                    <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                    </button>
                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                        <i class="material-icons">art_track</i>
                    </button>
                    <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                        <i class="material-icons">edit</i>
                    </button>
                    <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                        <i class="material-icons">close</i>
                    </button>
                </div>
                <h4 class="card-title">
                    <a href="#pablo">Beautiful Castle</a>
                </h4>
                <div class="card-description">
                    The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Milan.
                </div>
            </div>
            <div class="card-footer">
                <div class="price">
                    <h4>$459/night</h4>
                </div>
                <div class="stats">
                    <p class="card-category"><i class="material-icons">place</i> Milan, Italy</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {


        //initFullCalendar();
        $('#nextTrainingTable').DataTable({
            scrollCollapse: true,
            info: false,
            pageLength: 20,
            
            scrollY: "550px",
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records"
            }
        });
        $calendar = $("#fullCalendar"),
                today = new Date,
                y = today.getFullYear(),
                m = today.getMonth(),
                d = today.getDate(),
                $calendar.fullCalendar({
                    viewRender: function (e, a) {
                        "month" != e.name && $(a).find(".fc-scroller").perfectScrollbar()
                    },
                    header: {
                        left: "title",
                        center: "month,agendaWeek,agendaDay",
                        right: "prev,next,today"
                    },
                    defaultDate: today,
                    selectable: !0,
                    selectHelper: !0,
                    views: {
                        month: {
                            titleFormat: "MMMM YYYY"
                        },
                        week: {
                            titleFormat: " MMMM D YYYY"
                        },
                        day: {
                            titleFormat: "D MMM, YYYY"
                        }
                    },
                    select: function (t, n) {
                        swal({
                            title: "Create an Event",
                            html: '<div class="form-group"><input class="form-control" placeholder="Event Title" id="input-field"></div>',
                            showCancelButton: !0, confirmButtonClass: "btn btn-success",
                            cancelButtonClass: "btn btn-danger", buttonsStyling: !1
                        }).then(function (e) {
                            var a;
                            event_title = $("#input-field").val(),
                                    event_title && (a = {
                                        title: event_title,
                                        start: t,
                                        end: n
                                    },
                                            $calendar.fullCalendar("renderEvent", a, !0)),
                                    $calendar.fullCalendar("unselect")
                        }).catch(swal.noop)
                    },
                    editable: !0,
                    eventLimit: !0,
                    events: [{title: "All Day Event",
                            start: new Date(y, m, 1),
                            className: "event-default"},
                        {
                            id: 999, title: "Repeating Event",
                            start: new Date(y, m, d - 4, 6, 0),
                            allDay: !1,
                            className: "event-rose"
                        }, {
                            id: 999,
                            title: "Repeating Event",
                            start: new Date(y, m, d + 3, 6, 0),
                            allDay: !1,
                            className: "event-rose"
                        }, {
                            title: "Meeting",
                            start: new Date(y, m, d - 1, 10, 30),
                            allDay: !1,
                            className: "event-green"
                        }, {
                            title: "Lunch",
                            start: new Date(y, m, d + 7, 12, 0),
                            end: new Date(y, m, d + 7, 14, 0),
                            allDay: !1,
                            className: "event-red"
                        }, {
                            title: "Md-pro Launch",
                            start: new Date(y, m, d - 2, 12, 0),
                            allDay: !0,
                            className: "event-azure"
                        }, {
                            title: "Birthday Party",
                            start: new Date(y, m, d + 1, 19, 0),
                            end: new Date(y, m, d + 1, 22, 30),
                            allDay: !1,
                            className: "event-azure"
                        }, {
                            title: "Click for Creative Tim",
                            start: new Date(y, m, 21),
                            end: new Date(y, m, 22),
                            url: "http://www.creative-tim.com/",
                            className: "event-orange"
                        }, {
                            title: "Click for Google",
                            start: new Date(y, m, 21),
                            end: new Date(y, m, 22),
                            url: "http://www.creative-tim.com/",
                            className: "event-orange"
                        }]
                });
    });
</script>
@endsection