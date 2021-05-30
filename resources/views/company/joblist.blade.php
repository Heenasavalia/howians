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
                                        <h4>Job Post Details</h4>
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
                                            <a href="#!">Job list</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-body">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        @include('company.layout.flash')
                                    </div>
                                </div>
                                <div class="table-responsive dt-responsive">
                                    <table id="job_post_list" class="table table-striped table-bordered nowrap">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Job name</th>
                                            <th>Number of vacancy</th>
                                            <th>Work experiance type</th>
{{--                                            <th>Created date</th>--}}
                                            <th>Created date</th>
{{--                                            <th>Total Candidate</th>--}}
                                            <th>View Candidate</th>
                                            <th>Delete</th>
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

            var table = $('#job_post_list').DataTable({
                "lengthMenu": [[10, 25, 50,100, -1], [10, 25, 50,100, "All"]],
                "processing": true,
                "serverSide": true,
                order: [[0, 'desc']],
                "ajax": {
                    "url": url + '/company/getjobuserlist',
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
                    { data: 'title', name: 'title' },
                    { data: 'job_category', name: 'job_category' },
                    { data: 'number_of_vacancy', name: 'number_of_vacancy' },
                    { data: 'work_experiance_type', name: 'work_experiance_type' },
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
                        "mData": "Name",
                        "mRender": function (data, type, row) {

                            var url1 = '{{ url("company/show-user", "id") }}';
                            url1 = url1.replace('id', row.id);

                            return "<a title=\"View\" href='" + url1 + "' class='m-r-15 btn-edit btn btn-info btn-round'>View Candidate</a>";

                        }
                    },
                    {
                        "mData": "Name",
                        "mRender": function (data, type, row) {

                            return "<a  title=\"Delete\" rel='" + row.id + "' href='javascript:void(0)' class='btndel btn-delete'>" +
                            "<i class=\"icofont icofont-ui-delete\"></i></a>";
                        }
                    },
                ],
            });
            $('#job_post_list tbody').on('click', 'a.btndel', function () {
                var id = $(this).attr("rel");
                swal({
                        title: "Are you sure!",
                        type: "error",
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Yes!",
                        showCancelButton: true,
                    },
                    function() {
                        $.ajax({
                            url: url +'/company/job-requirement/'+id,
                            type : "post",
                            data: {_method: 'delete', _token: "{{ csrf_token() }}"},
                            success: function (data) {
                                if(data == true){
                                    swal({title: "Success", text: "Job post has been deleted!", type: "success"},
                                        function(){
                                            table.clear().draw();
                                        }
                                    );

                                }else{
                                    swal("Error!", "Something went Wrong", "error");
                                }
                            }
                        });
                    });
            });

        });
    </script>

@endpush('scripts')
