@extends('company.layout.company_layout')
@section('content')
<style>
.subject_td {
    color: #000;
}
.message_td {
    color: #000;
}
</style>
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
                                        <h4>Messages</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('company/home') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#!">Messages</a>
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
                                    <table id="company_messages" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Job</th>
                                                <th>Messages</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($company_message as $m)
                                                @if($m->isread == 0)
                                                    <tr class="unread_message">
                                                        <td>
                                                            <span class="text-center">
                                                                <a rel="{{$m->id}}" href='javascript:void(0)' class='btndel btn-delete'>
                                                                    <i class="icofont icofont-ui-delete">
                                                                    </i>
                                                                </a>
                                                            </span>
                                                        </td>
                                                        <td><span class="text-center">{{$m->user->first_name}} {{$m->user->last_name}}</span></td>
                                                        <td><a class="subject_td" href="{{ url("/company/read-message", $m->id) }}">{{$m->job->title }}</a></td>
                                                        <td><a class="message_td font-weight-bold" href="{{ url("/company/read-message", $m->id) }}">
                                                                {{(strlen($m->message) > 50 ) ? substr($m->message,0,50).'...' : $m->message }}
                                                            </a>
                                                        </td>
                                                        <td>{{ date('d M Y H:i:s', strtotime($m->created_at)) }}</td>
                                                    </tr>
                                                @else
                                                    <tr>
                                                        <td><span class="text-center"><a rel="{{$m->id}}" href='javascript:void(0)' class='btndel btn-delete'><i class="icofont icofont-ui-delete"></i></a></span></td>
                                                        <td><span class="text-center">{{$m->user->first_name}} {{$m->user->last_name}}</span></td>
                                                        <td><a class="subject_td" href="{{ url("/company/read-message", $m->id) }}">{{$m->job->title }}</a></td>
                                                        <td><a class="message_td" href="{{ url("/company/read-message", $m->id) }}">
                                                                {{(strlen($m->message) > 50 ) ? substr($m->message,0,50).'...' : $m->message }}
                                                            </a>
                                                        </td>
                                                        <td>{{ date('d M Y H:i:s', strtotime($m->created_at)) }}</td>
                                                    </tr>

                                                @endif
                                            @endforeach
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

    <script type="text/javascript">
        var url = "{{ url('/') }}";
        $(document).ready(function () {
            var dataTable = $('#company_messages').DataTable({
                "lengthMenu": [[10, 25, 50,100, -1], [10, 25, 50,100, "All"]],
                "order": [[4, 'desc']],

            });


            //Message Delete
            $('#company_messages tbody').on('click', 'a.btndel', function () {
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
                            url: url +'/company/messages/'+id,
                            type : "post",
                            data: {_method: 'delete', _token: "{{ csrf_token() }}"},
                            success: function (data) {
                                if(data == true){
                                    swal({title: "Success", text: "Messages has been deleted!", type: "success"},
                                        function(){
                                            window.location.reload();
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
