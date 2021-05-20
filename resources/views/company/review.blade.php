@extends('company.layout.company_layout')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Review Details</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('company/dashboard') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#!">Review Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-body">
                        <div class="card">
                            <div class="card-block">
                                <div class="table-responsive dt-responsive">
                                    <table id="review_list" class="table table-striped table-bordered nowrap">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Candidate Name</th>
                                            <th>Job Title</th>
                                            <th>Total Rate</th>
                                            <th>Description</th>
                                            <th>Created date</th>
                                            <th>View detail</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('company/bower_components/datatables.net/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('company/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('company/assets/pages/data-table/js/jszip.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('company/assets/pages/data-table/js/pdfmake.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('company/assets/pages/data-table/js/vfs_fonts.js')}}" type="text/javascript"></script>
    <script src="{{ asset('company/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('company/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('company/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('company/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('company/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}" type="text/javascript"></script>
    {{--Date:29-06-2019--}}


    <script type="text/javascript">
        var url = "{{ url('/') }}";
        $(function () {

            var table = $('#review_list').DataTable({
                "lengthMenu": [[10, 25, 50,100, -1], [10, 25, 50,100, "All"]],
                "processing": true,
                "serverSide": true,
                order: [[0, 'desc']],
                "ajax": {
                    "url": url + '/company/getallreview',
                    "method": "POST",
                    data:{
                        company_id: '{{Auth::user()->id}}'
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                },
                columns: [
                    { data: 'id', name: 'id' },
                    {
                        "data": "user_id",
                        "mRender": function (data, type, row) {
                            //console.log(row);
                            return row.user.first_name + " " + row.user.last_name;
                        }
                    },
                    {
                        "data": "job_id",
                        "mRender": function (data, type, row) {
                            return row.job.title;
                        }
                    },
                    { data: 'rate', name: 'rate' },
                    {
                        "data": 'description',
                        "name": 'description',
                        render: function ( data, type, row ) {
                            return data.length > 10 ?
                                data.substr( 0, 35 ) +'…' :
                                data;
                        }
                    },
                    {
                        "mData": "created_at",
                        "mRender": function (data, type, row) {
                            var today = new Date(row.created_at);
                            const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
                                "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"
                            ];
                            var dd = today.getDate();
                            var yyyy = today.getFullYear();
                            if (dd < 10) {
                                dd = '0' + dd;
                            }
                            var mm = monthNames[today.getMonth()];
                            var hh = today.getHours();
                            var Meridien = "";
                            if (hh < 12) {
                                Meridien = "AM";
                            } else
                                Meridien = "PM";

                            hh %= 12;
                            var today = dd + ' ' + mm + ' ' + yyyy + ' ' + hh + ":" + today.getMinutes() + " " + Meridien;
                            return today;
                        }
                    },
                    {
                        "Data": "action",
                        "mRender": function (data, type, row) {
                            var url='{{ url('company/review_details',"id") }}';
                            url = url.replace('id',row.id);
                            return '<a  title="View" href="' + url + '" class="m-r-10 btn-view">' +
                                '<i class="icofont icofont-eye-alt"></i>' +
                                '</a>';
                        }
                    },
                ],
            });
        });
    </script>

@endpush('scripts')
