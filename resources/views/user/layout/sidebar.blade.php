<link rel="stylesheet" href="{{ asset('css/jquery.custom-scrollbar.css') }}">

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{URL::to('/')}}" class="brand-link">
        <img src="{{ asset('imges/backend_logo.png') }}" alt="" class="Backend logo">
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if(Auth::user()->profile_image)
                <a href="{{url('user/profile-edit')}}"><img src="{{ config('constants.profile_image') . Auth::user()->profile_image }}" onerror="this.src='{{ asset('imges/image_preview.png') }}';" class="img-circle elevation-2" alt="User Image"></a>
                @else
                <a href="{{url('user/profile-edit')}}"><img src="{{ asset('imges/user.png') }}" class="img-circle elevation-2" onerror="this.src='{{ asset('imges/image_preview.png') }}';" alt="User Image"></a>
                @endif
            </div>
            <?php  
                    $current_time = \Carbon\Carbon::now()->timestamp;  
                ?>
            <div class="info">
                <a href="{{url('user/profile/'.$current_time)}}" class="d-block text-capitalize font-weight-bold font-enlarge">{{ Auth::user()->first_name}} {{ Auth::user()->last_name}} </a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @if(Auth::user()->id != 576)
                <li class="nav-item">
                    <a href="{{url('user/home')}}" class="nav-link">
                        <i class="fa fa-dashboard p-r-4" aria-hidden="true"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="{{url('user/customer/all')}}" class="nav-link">
                        <i class="fa fa-user-circle p-r-4" aria-hidden="true"></i>
                        <p>Active Business</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('user/business/pending')}}" class="nav-link">
                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                        <p>Pending Business</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('user/business/draft')}}" class="nav-link" id="draft">
                        <i class="fa fa-clipboard" aria-hidden="true"></i>
                        <p>Business Saved as Draft</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('user/business/fail-trnsection')}}" class="nav-link" id="fail">
                        <i class="fa fa-window-close-o" aria-hidden="true"></i>
                        <p>Failed Transaction</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('user/customers/create')}}" class="nav-link" id="add_listing_a">
                        <i class="fa fa-plus-square-o p-r-4" aria-hidden="true"></i>
                        <p>Add Business Listing</p>
                    </a>
                </li>
                @if(Auth::user()->id != 576)
                <?php 
                    $account_id = Auth::user()->account_id;
                ?>
                <li class="nav-item">
                    <a href="{{ url('user/genealogy?'.$account_id) }}" class="nav-link" id="genealogy">
                        <i class="fa fa-map-signs p-r-4" aria-hidden="true"></i>
                        <p>Genealogy</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('user/shops')}}" class="nav-link" id="shp">
                        <i class="fa fa-id-card" aria-hidden="true"></i>
                        <p>Shop Contact List</p>
                    </a>
                </li>
				<li class="nav-item">
                    <a href="{{url('user/business/pending-trust')}}" class="nav-link" id="ngo_a">
                        <i class="fa fa-spinner" aria-hidden="true"></i>
                        <p>Gov./NGO Listing</p>
                    </a>
                </li>
                <li class="nav-header">PERSONAL</li>
                <li class="nav-item">
                    <a href="{{url('user/club')}}" class="nav-link" id="club">
                        <i class="fa fa-address-book-o p-r-4" aria-hidden="true"></i>
                        <p>ACI</p>
                    </a>
                </li>
                <?php  
                    $current_time = \Carbon\Carbon::now()->timestamp;  
                ?>
                <li class="nav-item">
                    <a id="my_profile" href="{{url('user/profile/'.$current_time)}}" class="nav-link">
                        <i class="fa fa-address-book-o p-r-4" aria-hidden="true"></i>
                        <p>My Profile</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('user/visiting_card') }}" class="nav-link" id="crdd">
                        <i class="fa fa-id-card p-r-4" aria-hidden="true"></i>
                        <p>E-Visiting Card</p>
                    </a>
                </li>

                {{--<li class="nav-item">
                    <a href="{{ url('visiting-card/{account_id}') }}" class="nav-link">
                        <i class="fa fa-id-card p-r-4" aria-hidden="true"></i>
                        <p>Card</p>
                    </a>
                </li>--}}

                <li class="nav-item">
                    <a href="{{url('user/change-password')}}" class="nav-link">
                        <i class="fa fa-gear p-r-4" aria-hidden="true"></i>
                        <p>Change password</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('user/my-sponsor')}}" class="nav-link">
                        <i class="fa fa-star-half-o p-r-4" aria-hidden="true"></i>
                        <p>My Sponsor</p>
                    </a>
                </li>

                <li class="nav-header">INCOME</li>
                <li class="nav-item">
                    <a href="{{url('user/direct-income')}}" class="nav-link">
                        <i class="fa fa-plus-square p-r-4" aria-hidden="true"></i>
                        <p>Direct Income</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('user/referral-income/all')}}" class="nav-link">
                        <i class="fa fa-cubes p-r-4" aria-hidden="true"></i>
                        <p>Referral Income</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('user/redirect-income/all')}}" class="nav-link">
                        <i class="fa fa-exchange" aria-hidden="true"></i>
                        <p>Redirect Income</p>
                    </a>
                </li>
                <li class="nav-header">TDS Receipt</li>
                <li class="nav-item">
                    <a href="{{url('user/tds_data/'.now()->month.'/'.now()->year)}}" class="nav-link"> 
                        <i class="fa fa-upload p-r-4" aria-hidden="true"></i>
                        <p>TDS Reports</p>
                    </a>
                </li>
                <li class="nav-header">MESSAGES</li>
<!--                    <li class="nav-item">
                        <a href="{{url('user/user-notify')}}" class="nav-link">
                            <i class="fa fa-bell p-r-4"></i>
                            <p>
                                Add Customers
                            </p>
                        </a>
                    </li>-->
                <?php  
                    $current_time = \Carbon\Carbon::now()->timestamp;  
                ?>

                <li class="nav-item">
                    <a href="{{url('user/notifications/'.$current_time)}}" class="nav-link" id="notification">
                        <i class="fa fa-envelope p-r-4" aria-hidden="true"></i>
                        <p> My Messages <span id="display_count"></span></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('user/support-messages')}}" class="nav-link">
                        <i class="fa fa-commenting" aria-hidden="true"></i>
                        <p>Support Messages</p>
                    </a>
                </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

</aside>
@push('scripts')

<script src="{{ asset('js/jquery.custom-scrollbar.js') }}"></script>
<script>
    $(document).ready(function() {
        $(".main-sidebar .sidebar").customScrollbar();
    });

</script>
<script type="text/javascript">
    var url = "{{ url('/') }}";
    $('.nav-pills').find('li a').each(function () {
		str1 = window.location.href;
		str2 = "mailverification";
		str3 = "create-trust";
        str4 = "profile";
        str5 = "genealogy";
        str6 = "notification";
        str7 = "club";
        str8 = "draft";
        str9 = "Fail";
        str91 = "fail";
        str10 = "shop";
        str11 = "card";
        str111 = "director-edit";
        if ($(this).attr('href') == window.location.href) {
            $(this).addClass('active');
        }else if((str1.indexOf(str2) != -1)){
			$("#add_listing_a").addClass('active');
		}else if((str1.indexOf(str3) != -1)){
			$("#ngo_a").addClass('active');
		}else if((str1.indexOf(str4) != -1)){
			$("#my_profile").addClass('active');
		}else if((str1.indexOf(str5) != -1)){
			$("#genealogy").addClass('active');
		}else if((str1.indexOf(str6) != -1)){
			$("#notification").addClass('active');
		}else if((str1.indexOf(str7) != -1)){
			$("#club").addClass('active');
		}else if((str1.indexOf(str8) != -1)){
			$("#draft").addClass('active');
		}else if((str1.indexOf(str9) != -1) || (str1.indexOf(str91) != -1)){
			$("#fail").addClass('active');
		}else if((str1.indexOf(str10) != -1)){
			$("#shp").addClass('active');
		}else if((str1.indexOf(str11) != -1) || (str1.indexOf(str111) != -1)){
			$("#crdd").addClass('active');
		}
    });

    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    console.log(dd);
    $(document).ready(function () {
        document.addEventListener('DOMContentLoaded', function () {
            if (!Notification) {
                alert('Desktop notifications not available in your browser. Try Chromium.');
                return;
            }

            if (Notification.permission !== 'granted')
                Notification.requestPermission();
        });

        // unread-counts
        $.ajax({
            type: "GET",
            url: url + "/user/unread-counts",
            success: function (res) {

                if (res.count > 0) {
                    $("#display_count").html('<span id="message_count" class="badge badge-danger right">' + res.count + '</span>');
                }
            }
        });
    });


</script>
@endpush('scripts')
