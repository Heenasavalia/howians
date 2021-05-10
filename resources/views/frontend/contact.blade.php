@include('frontend.layout.header')

<!-- Contact 1 start -->
<div class="contact-sec content-area-box">
    <div class="container">
        <!-- Contact info -->
        <div class="row">
            <div class="col-md-7">
                <!-- Main title -->
                <div class="contact-title">
                    <h2>Contact Us</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                </div>
                <div class="form-sec">
                    <form action="#" method="GET" enctype="multipart/form-data">
                        <div class="form-group name">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group email">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group number">
                            <input type="text" name="phone" class="form-control" placeholder="Mobile Number">
                        </div>

                        <div class="form-group message">
                            <textarea class="form-control" name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="send-btn">
                            <button type="submit" class="btn button-theme btn-lg">Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <div class="info-main">
                    <div class="info-section">
                        <h3>Info</h3>
                        <ul>
                            <li><i class="fa fa-envelope-o"></i> <a href="#">Howians@gmail.com</a></li>
                            <li><i class="fa fa-phone"></i> <a href="#">+91 12345 67890</a></li>
                            <li><i class="fa fa-building-o"></i> Varachha, Surat</li>
                            <li><i class="fa fa-clock-o"></i> 09:00 to 06:00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact 1 end -->

@include('frontend.layout.footer')

<script>
    $(document).ready(function() {
        $("body").addClass('contact-section');
    });
</script>