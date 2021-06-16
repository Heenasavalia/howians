@extends('frontend.layout.front_layout')
@section('content')
<!-- Banner start -->
<section class="breadcrumb">
    <div class="banner-img"><img class="d-block w-100 h-100" src="{{asset('front_end/images/service_banner.jpg')}}" alt="banner"></div>
    <div class="container inner-banner commen-banner">
        <h2>Our Services</h2>
        <p>Learn more about how Howians collects and uses data and your rights as a Dribbble user.</p>
    </div>
</section>
<!-- banner end -->

<!-- Faq section start -->
<section class="faq-section content-area-box">
    <div class="container">
        <p>This website is operated by Freepik Company, S.L., registered in the Commercial Registry of Málaga, volume 4994, sheet 217, page number MA-113059, with Tax Number B-93183366 and registered office at 13 Molina Lario St., 5th floor, 29015, Málaga, Spain ("Company").</p>

        <p>This page contains important information about your legal rights and obligations when using any of the websites and services belonging to the Company. The following is a collection of the generally-applicable terms of use across our websites and services, whilst specific provisions are included in the terms of use of the relevant Company’s website or service and may be accessed via the links provided below:</p>

        <ul class="commen_ul mb-3">
            <li>Freepik Terms of Use</li>
            <li>Flaticon Terms of Use</li>
            <li>Slidesgo Terms of Use</li>
            <li>Piktab Terms of Use (access via the corresponding Google Chrome plug-in extension)</li>
        </ul>

        <h3>Registration</h3>
        <p>Before accessing and using any of the Company’s websites ("Websites") or services ("Services"), you must read the specific terms of use applicable to the access, browsing and use by the users ("User" or "Users", as applicable) of the relevant Website/Service (displayed above), as accessing and using any of the Websites or Services implies that you have read and accept to be bound by the terms of use of the relevant Website or Service. We also recommend regularly checking the applicable terms of use as the Company reserves the right to modify these at any time (the date at the beginning of these terms refers to the latest update of these terms, which will be applicable from the date of publication).</p>

        <p>If you have any objections regarding the terms of use of the Websites or Services, please refrain from using these.</p>

        <p>Should any conflict arise between the content of the terms as they are laid out below and the content of the specific terms of use of each Website or Service (displayed above), the specific terms of use of each Website or Service shall always prevail.</p>

        <p>In respect of collection and processing of personal data, the Privacy policy will apply.</p>

        <p>Regarding content owned by third parties and offered through the Websites and/or Services in collaboration with the Company (if any), the Company acts exclusively as the provider of them intermediation service between the third parties’ offer of content and the Users interested in downloading them, without any liability in relation to such contents, except for those cases expressly stated by the applicable law.</p>

        <p>If any provision in these terms is declared to be invalid or unenforceable, it shall be substituted or deemed as not included. The remaining provisions in these terms shall not be affected in any way.</p>
    </div>
</section>
<!-- Faq section end -->

@endsection
@push('scripts')

<script>
    $(document).ready(function() {
        $("body").addClass('inner-page-section');
    });
</script>
@endpush('scripts')