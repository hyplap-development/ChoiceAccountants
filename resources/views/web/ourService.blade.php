@extends('layouts.web')

@section('title')
Our Services | Choice Accountants Australia
@endsection

@section('meta')
@show

@section('style')
@endsection


@section('content')
<header class="l-header l-header--full-height">
    <div class=" grid grid--xl-50-50 relative">
        <div class="grid__col grid__col--center-content grid__col--4k-pushed-to-right relative zindex-3 padding-xl-120">
            <div class="grid__col-content max-width-600">
                <div class="breadcrumbs ">
                    <ul> </ul>
                </div>
                <h1 class="headline-2 mb-10em cover-pseudo animation-css overflow-hidden"> Delivering Solutions
                    Across multiple Domains & Services to Drive Unparalleled Success </h1>
                <div class="animation-fadeInUp mobile-no-animation" data-animation-delay="600">
                    <div class="content  mb-30em">
                        <p>Choose Choice Accountants for tailored, efficient, and impactful business solutions in
                            Australia. Our experienced professionals specialize in legal compliance, business
                            advisory, logistics, and more. We're committed to simplifying complexity, fostering
                            growth, and ensuring your success with innovative, holistic solutions. Partner with us
                            to experience the difference.
                        </p>

                        <a class="mt-20em btn btn--primary" href="{{url('/get-in-touch')}}" title="Make sure your call recording is MiFID II compliant">
                            Contact Us Today
                        </a>
                    </div>
                </div>
            </div>
            <div class="bg-shape quater-filled gradient-1 size-96 bottom right ">
                <div class="bg-shape__inner animation-rotateLeft90 mobile-no-animation" data-animation-delay="1000" data-animation-offset="100%"></div>
            </div>
        </div>
        <div class="grid__col grid__col--with-img grid__col--stretch-content grid__col--touch-dev-landscape relative zindex-2 overflow-hidden">
            <picture class=" frame frame--stretch ">
                <img class="frame__media" width="1200" height="1200" decoding="async" src="/web/images/servicepage.png" alt="Man on phone with card">
            </picture>
            <div class="cover animation-slideOut no-mobile-animation zindex-3" data-animation-delay="200"></div>
            <div class="bg-shape quater-border-filled gradient-3 top right rotate-270 size-180">
                <div class="bg-shape__inner animation-rotateRight90 mobile-no-animation" data-animation-delay="600">
                </div>
            </div>
            <div class="overlay overlay--pink overlay--small-bottom animation-css no-mobile-animation">
                <div class="bg-shape quater-border-double top-outside size-96 left rotate-90 color-white zindex-2">
                    <div class="bg-shape__inner animation-rotateLeft90 mobile-no-animation " data-animation-delay="550"> </div>
                </div>
                <div class="bg-shape quater-border-filled gradient-3 size-96 top left rotate-180 zindex-2">
                    <div class=" bg-shape__inner animation-rotateLeft90 mobile-no-animation " data-animation-delay="800"> </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="section bg-gradient color-white">
        <div class="content container color-white">
            <div class="row row--g-20 ">
                <div class="col-sm-12 ">
                    <h2 class="headline-2" style="text-align: center;">Your Partner in Excellence, Providing Tailored Solutions to Drive Success and Simplify Your Business Journey in Australia.</h2>
                    <p style="text-align: center;">With a focus on innovation, efficiency, and compliance, we're dedicated to helping businesses thrive. Our holistic approach encompasses legal, advisory, logistics, and more, ensuring we're with you every step of the way.</p>
                </div>
            </div>
        </div>
    </section>
    @foreach($departments as $key=> $department)
    @if($key % 2 == 0)
    <section class="section">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class=" col-xl-6  order-lg-2  ">
                    <picture class="frame frame--image-covered frame--square-touch frame--landscape-tablet frame--landscape-desktop ">
                        <img class="frame__media" width="1000" height="600" src="/{{$department->bannerImage}}" onerror="this.onerror=null;this.src='/assets/media/blankimg.svg'" alt="{{$department->bannerImgAlt}}">
                    </picture>
                </div>
                <div class=" col-xl-6 padding-xl-96-120 center-content-y  order-lg-1 ">
                    <div class="content">
                        <h3 class="headline-2 mb-5em headline-3">{{$department->name}}</h3>
                        <p style="white-space:pre-line;">{{$department->homePageDes}}</p>
                        <a class="mt-20em btn btn--primary" href="{{url('/our-services')}}/{{$department->slug}}" title="Make sure your call recording is MiFID II compliant">
                            Read More
                        </a>
                        <a class="mt-20em btn btn--primary" data-bs-toggle="modal" data-bs-target="#enquirymodal" title="Enquire now" style="margin-left: 15px;">
                            Enquiry now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
    <section class="section">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-xl-6 padding-xl-96-120 center-content-y  order-lg-1 ">
                    <div class="content">
                        <h3 class="headline-2 mb-5em headline-3">{{$department->name}}</h3>
                        <p>{{$department->homePageDes}}</p>
                        <a class="mt-20em btn btn--primary " href="{{url('/our-services')}}/{{$department->slug}}" title="Make sure your call recording is MiFID II compliant">
                            Read More
                        </a>
                        <a class="mt-20em btn btn--primary" data-bs-toggle="modal" data-bs-target="#enquirymodal" title="Enquire now" style="margin-left: 15px;">
                            Enquiry now
                        </a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <picture class=" frame frame--image-covered frame--square-touch frame--landscape-tablet frame--landscape-desktop ">
                        <img class="frame__media" width="1000" height="600" src="/{{$department->bannerImage}}" onerror="this.onerror=null;this.src='/assets/media/blankimg.svg'" alt="{{$department->bannerImgAlt}}">
                    </picture>
                </div>

            </div>
        </div>
    </section>
    @endif
    @endforeach
</main>

@endsection

@section('scripts')
@endsection