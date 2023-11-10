@extends('layouts.web')

@section('title')
Trusted partner for CPA services in Australia | Choice Accountants
@endsection

@section('meta')
<meta name="title" content="Trusted partner for CPA services in Australia | Choice Accountants">
<meta name="description" content="Achieve Financial Success with Australia's Leading CPA Firm | We offer Expert Accounting, Legal Compliance, Small Business Advisory, and Tailored Manufacturing & Logistics Solutions. Trust us for Comprehensive Business Solutions.">
<meta name="keywords" content="Tax returns, Cpa, accounting, business advisory, Wealth management, top australian accounting firm">
<meta property="og:type" content="website" />
<meta property="og:image" itemprop="image" content="https://choice.accountants/web/images/logo.webp" />
<meta property="og:description" content="Achieve Financial Success with Australia's Leading CPA Firm | We offer Expert Accounting, Legal Compliance, Small Business Advisory, and Tailored Manufacturing & Logistics Solutions. Trust us for Comprehensive Business Solutions.">
<meta name="twitter:site" content="@choiceacountants" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Trusted partner for CPA services in Australia | Choice Accountants" />
<meta name="twitter:description" content="Achieve Financial Success with Australia's Leading CPA Firm | We offer Expert Accounting, Legal Compliance, Small Business Advisory, and Tailored Manufacturing & Logistics Solutions. Trust us for Comprehensive Business Solutions." />
<meta property="twitter:url" content="https://choice.accountants/" />
<link rel="alternate" href="https://choice.accountants/" hreflang="en-IN" />
<link rel="alternate" href="https://choice.accountants/" hreflang="en-AE" />
@endsection

@section('style')
@endsection


@section('content')
<header class="l-header l-header--full-height animation-css" data-animation-delay="400">
    <div class="grid grid--xl-50-50 relative">
        <div class="grid__col grid__col--center-content padding-header-col relative ">
            <div class="grid__col-content zindex-3 max-width-575">
                <h2 class="headline-1 mb-5em overflow-hidden"> <span class="cover-pseudo animation-css">Unleash Your
                        Accounting Success with Choice</span> </h2>
                <div class="animation-fadeInUp mobile-no-animation" data-animation-delay="600">
                    <div class="content content__extra-large-text mb-30em">
                        <p>Your Trusted Partner for Expert CPA Services in Australia</p>
                    </div> <a class="btn btn--primary" href="{{url('/get-in-touch')}}" title="Get in touch"> Get in touch </a>
                </div>
            </div>
            <div class="bg-shape size-96 quater-filled gradient-1 top right rotate-270 color-white">
                <div class="bg-shape__inner animation-rotateRight90 mobile-no-animation" data-animation-delay="600"> </div>
            </div>
        </div>
        <div class="grid__col grid__col--with-img grid__col--stretch-content grid__col--touch-dev-landscape zindex-2 relative">
            <picture class=" frame frame--stretch ">
                <img class="frame__media" width="5760" height="3840" decoding="async" src="/web/images/choice.webp" alt="Partner for Expert CPA Services in Australia - Choice Accountants">
            </picture>
            <div class="cover cover--to-left animation-css no-mobile-animation bg-white"></div>
            <div class="overlay overlay--with-shapes-large animation-css no-mobile-animation">
                <div class="overlay__shape">
                    <div class="overlay__shape-gradient"> <svg class="overlay__icon" version="1.1" id="Warstwa_1" xmlns="" xmlns:xlink="" x="0px" y="0px" viewBox="0 0 120 60" style="enable-background:new 0 0 120 60;" xml:space="preserve">
                            <linearGradient id="gradient-path" gradientUnits="userSpaceOnUse" x1="-1144.485" y1="-126.61" x2="-1145.465" y2="-126.61" gradientTransform="matrix(-120 0 0 -120 -137336 -15133.2002)">
                                <stop offset="0" style="stop-color:#3298FF" />
                                <stop offset="1" style="stop-color:#268d44" />
                            </linearGradient>
                            <path id="Path_10730" style="fill:url(#gradient-path);" d="M6.8,60c0,29.4,23.8,53.2,53.2,53.2s53.2-23.8,53.2-53.2S89.4,6.8,60,6.8S6.8,30.6,6.8,60L6.8,60 M60,120 C26.9,120,0,93.1,0,60S26.9,0,60,0s60,26.9,60,60S93.1,120,60,120z" />
                        </svg> </div>
                    <div class="overlay__shape-border"> <svg class="overlay__icon" version="1.1" id="Warstwa_1" xmlns="" xmlns:xlink="" x="0px" y="0px" viewBox="0 0 120 60" style="enable-background:new 0 0 120 60;" xml:space="preserve">
                            <path id="Path_10730" d="M6.8,60c0,29.4,23.8,53.2,53.2,53.2s53.2-23.8,53.2-53.2S89.4,6.8,60,6.8S6.8,30.6,6.8,60L6.8,60 M60,120 C26.9,120,0,93.1,0,60S26.9,0,60,0s60,26.9,60,60S93.1,120,60,120z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    @if($departments->count()>0)
    <section class="section ">
        <div class="container-fluid grid grid--4-column-cards bg-checkboard-2-2-4-cols" style=" --checkboardFirstColor: #fff; --checkboardSecondColor: #f7fbff; ">
            <div class=" grid__col grid__col--heading grid__col--heading-2-cols grid__col--heading-2-rows padding-heading content bg-purple ">
                <div class="relative zindex-3">
                    <h2 class="headline-2"> Struggling with day-to-day accounting challenges ? Your Path to Optimal Solutions
                        Starts Here!
                    </h2>
                    <p class="card__text">
                    <p>Empower Your Business Communication with Expert CPAs in Australia! Conquer Challenges Across Industries,
                        Backed by Years of Experience.</p>
                    </p>
                </div>
                <div class=" bg-shape quater-border-double top left color-white size-120  ">
                    <div class="bg-shape__inner animation-rotateLeft90" data-animation-offset="100%"> </div>
                </div>
                <div class=" bg-shape quater-filled bottom right gradient-1 size-96  ">
                    <div class="bg-shape__inner animation-rotateLeft90" data-animation-offset="100%"> </div>
                </div>
            </div>
            @foreach($departments as $department)
            <a href="{{url('/our-services')}}/{{$department->slug}}" title="{{$department->name}}" class=" grid__col card card--gradient-hover padding-xl-72 content cardnostyle">
                <div class="card__btn btn btn--round-prev"> <svg class="btn__icon" width="32" height="26" aria-hidden="true">
                        <use xmlns:xlink="" href="/web/images/icons.svg#icon-arrow"> </use>
                    </svg> </div>
                <figure class="card__icon"> <img width="48" height="48" src="/{{$department->image}}" onerror="this.onerror=null;this.src='/assets/media/blankimg.svg'" alt="{{$department->imgAlt}}"> </figure>
                <h3 class="card__headline headline-4">{{$department->name}}
                </h3>
                <p class="card__text"> {{$department->homePageDes}}
                </p>
            </a>
            @endforeach
        </div>
    </section>
    @endif
    <section class="section">
        <div class="bg-blue2">
            <div class="container text-center">
                <h2 class="headline-2 pt-15em pb-15em mb-0em mt-0em" style="color: #fff;"> Empowering Your Experience With Unlimited Possibilities. </h2>
            </div>
        </div>
        <div class="">
            <div class="container">
                <div class="link-block-wrapper">
                    <a title="Proactive Guidance" class="link-block link-block--medium link-hover">
                        <div class="link-block__icon">
                            <img src="/web/images/guidance.webp" alt="Prompt Guidance" class="" width="57" height="57" style="padding: 1%;">
                        </div> <span class="link-block__text link-hover__text">
                            Proactive Guidance</span>
                        <p>Dedicated to prompt, reliable service, meeting deadlines, and efficiently managing financial matters.
                        </p>
                    </a>
                    <a title="Timely & Reliable" class="link-block link-block--medium link-hover">
                        <div class="link-block__icon">
                            <img src="/web/images/timing.webp" alt="Most Trusted and reliable source for Australian business complexities - Choice Accountants" class="" width="57" height="57" style="padding: 1%;">
                        </div> <span class="link-block__text link-hover__text">
                            Timely & Reliable </span>
                        <p>Proactive guidance, and solutions to navigate Australian business complexities.
                        </p>
                    </a>
                    <a title="Personalised Approach" class="link-block link-block--medium link-hover">
                        <div class="link-block__icon">
                            <img src="/web/images/personalization.webp" alt="Solving Clients problems our top most priority." class="" width="57" height="57" style="padding: 1%;">
                        </div> <span class="link-block__text link-hover__text">
                            Personalised Approach </span>
                        <p>Understanding each client's distinct situation, crafting bespoke solutions aligned with their goals.
                        </p>
                    </a>
                    <a title="Rich Experience" class="link-block link-block--medium link-hover">
                        <div class="link-block__icon">
                            <img src="/web/images/quality.webp" alt="Rich Experience" class="" width="57" height="57" style="padding: 1%;">
                        </div> <span class="link-block__text link-hover__text">
                            Rich Experience </span>
                        <p>A commitment to staying current in a dynamic world, mastering legislation, technology, and business
                            evolution.
                        </p>
                    </a>
                    <a title="Rich Experience" class="link-block link-block--medium link-hover">
                        <div class="link-block__icon">
                            <img src="/web/images/review.webp" alt="Client Centered" class="" width="57" height="57" style="padding: 1%;">
                        </div> <span class="link-block__text link-hover__text">
                            Client
                            Centered </span>
                        <p>Building trust, integrity, and enduring connections based on shared goals.
                        </p>
                    </a>
                    <a title="Rich Experience" class="link-block link-block--medium link-hover">
                        <div class="link-block__icon">
                            <img src="/web/images/communication.webp" alt="Client Centric Communication" class="" width="57" height="57" style="padding: 1%;">
                        </div> <span class="link-block__text link-hover__text">
                            Transparent Communication</span>
                        <p>Upholding open dialogue, addressing conflicts, and educating through transparent communication.
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @if($allservices->count()>0)
    <div class="section">
        <div class="bg-blue2">
            <div class="container text-center">
                <h2 class="headline-2 pt-15em pb-15em mb-0em mt-0em" style="color: #fff;"> Elevating Your Experience: Our Diverse Range of Services </h2>
            </div>
        </div>
        <div class="container-fluid swiper js-slider" id="case-study-reel">
            <div class="swiper-wrapper align-items-end">
                @foreach($allservices as $key => $allservice)
                @if($key % 2 == 0)
                <article class="swiper-slide block block--cs-tile ">
                    <div class="block__col padding-fcs overflow-hidden">
                        <div class="content content--large-text">
                            <h2 class="headline-3"> {{$allservice->name}} </h2>
                            <p> {{$allservice->description}} </p>
                            <a href="{{url('/our-services')}}/{{$allservice->department ? $allservice->department->slug : ''}}/{{$allservice->slug}}" title="{{$allservice->name}}" class="btn btn--primary btn--purple mt-10em mb-10em mr-15em">
                                <span class="btn__text"> Read More</span>
                            </a>
                            <a href="{{url('/get-in-touch')}}" title="Contact Us" class="btn btn--secondary btn--purple mt-10em mb-10em">
                                <span class="btn__text">
                                    Contact Us
                                </span>
                            </a>
                        </div>
                        <div class="bg-shape quater-filled color-purple bottom right size-96">
                            <div class="bg-shape__inner"></div>
                        </div>
                    </div>
                    <div class="block__col">
                        <figure class="frame frame--rounded frame--center overflow-hidden"> <img class="frame__media" src="/web/images/choice-symbol.webp" width="400" height="400" alt="Best Financial Accounting Service in Sydney - Choice Accountants"> </figure>
                        <picture class=" frame frame--image-covered frame--cs-tile ">
                            <img class="frame__media" width="1000" height="600" src="/{{$allservice->coverImage}}" onerror="this.onerror=null;this.src='/assets/media/blankimg.svg'" alt="{{$allservice->coverImageAltTag}}">
                        </picture>
                    </div>
                </article>
                @else
                <article class="swiper-slide block block--cs-tile reverse">
                    <div class="block__col padding-fcs overflow-hidden">
                        <div class="content content--large-text">
                            <h2 class="headline-3"> {{$allservice->name}} </h2>
                            <p> {{$allservice->description}} </p>
                            <a href="{{url('/our-services')}}/{{$allservice->department ? $allservice->department->slug : ''}}/{{$allservice->slug}}" title="{{$allservice->name}}" class="btn btn--primary btn--purple mt-10em mb-10em mr-15em">
                                <span class="btn__text"> Read More </span>
                            </a>
                            <a href="{{url('/get-in-touch')}}" title="Contact Us" class="btn btn--secondary btn--purple mt-10em mb-10em">
                                <span class="btn__text"> Contact Us </span>
                            </a>
                        </div>
                        <div class="bg-shape quater-border-double color-pink bottom left rotate-90 size-144">
                            <div class="bg-shape__inner"></div>
                        </div>
                    </div>
                    <div class="block__col">
                        <figure class="frame frame--rounded frame--center overflow-hidden"> <img class="frame__media" src="/web/images/choice-symbol.webp" width="468" height="217" alt="Choice Accountant- Trusted partner for Financial success"> </figure>
                        <picture class=" frame frame--image-covered frame--cs-tile ">
                            <img class="frame__media" width="1000" height="600" src="/{{$allservice->coverImage}}" onerror="this.onerror=null;this.src='/assets/media/blankimg.svg'" alt="{{$allservice->coverImageAltTag}}">

                        </picture>
                    </div>
                </article>
                @endif
                @endforeach
            </div>
            <div class="grid grid--50-50 relative zindex-3">
                <button type="button" class="grid__col text-left bg-pink cardnostyle btn btn--grid-prev js-cs-reel-prev">
                    <div class="btn__icon-wrapper">
                        <svg class="btn__icon stroke-white stroke-width-2 rotate-180" width="58" height="48" aria-label="Previous">
                            <use xmlns:xlink="" href="/web/images/icons.svg#icon-arrow"> </use>
                        </svg>
                    </div>
                </button>
                <button type="button" class="grid__col text-right cardnostyle bg-pink2 btn btn--grid-next js-cs-reel-next">
                    <div class="btn__icon-wrapper">
                        <svg class="btn__icon stroke-white stroke-width-2" width="58" height="48" aria-label="Next">
                            <use xmlns:xlink="" href="/web/images/icons.svg#icon-arrow"> </use>
                        </svg>
                    </div>
                </button>
            </div>
        </div>
    </div>
    @endif
    <!-- SERVICE AREAS ENDS -->
    @if($testimonials -> count()>0)
    <section class="section ">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-xl-4 overflow-hidden">
                    <picture class=" frame frame--image-covered frame--square-mobile frame--landscape-tablet height-100 ">
                        <img class="frame__media" width="7360" height="4912" src="/web/images/testi.webp" alt="Our Customers love our services. Read more">
                    </picture>
                    <div class="overlay overlay--slideUp overlay--padding-3 animation-css">
                        <div class="overlay__content grab animation-fadeInUp">
                            <h2 class="headline-3 mb-0em"> Here’s what our customers have to say </h2>
                        </div>
                    </div>
                    <div class="bg-shape quater-border-filled gradient-3 top left size-144 rotate-180">
                        <div class="bg-shape__inner animation-rotateLeft90" data-animation-delay="600"> </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="swiper js-slider" id="testimonial-reel">
                        <div class="swiper-wrapper">
                            @foreach($testimonials as $key1 => $testimonial)
                            @if($key1 %2 == 0)
                            <blockquote class="swiper-slide blockquote blockquote--reel  ">
                                <p class="large-text"> {{$testimonial->comment}} </p>
                                <footer class="normal-text">
                                    <p class="blockquote__name">{{$testimonial->name}}</p>
                                    <p class="blockquote__company">{{$testimonial->companyName}}</p>
                                </footer>
                            </blockquote>
                            @else
                            <blockquote class="swiper-slide blockquote blockquote--reel bg-lightOffWhite ">
                                <p class="large-text"> {{$testimonial->comment}} </p>
                                <footer class="normal-text">
                                    <p class="blockquote__name">{{$testimonial->name}}</p>
                                    <p class="blockquote__company">{{$testimonial->companyName}}</p>
                                </footer>
                            </blockquote>
                            @endif
                            @endforeach
                        </div>
                        <div class="scrollbar scrollbar--margin-none bg-lightOffWhite d-xl-none">
                            <div class="scrollbar__scroll js-testimonial-reel-scrollbar"></div>
                        </div>
                        <div class="grid grid--50-50 relative zindex-3">
                            <button type="button" class="grid__col text-left bg-pink cardnostyle btn btn--grid-prev js-cs-reel-prev">
                                <div class="btn__icon-wrapper">
                                    <svg class="btn__icon stroke-white stroke-width-2 rotate-180" width="58" height="48" aria-label="Previous">
                                        <use xmlns:xlink="" href="/web/images/icons.svg#icon-arrow"> </use>
                                    </svg>
                                </div>
                            </button>
                            <button type="button" class="grid__col text-right cardnostyle bg-pink2 btn btn--grid-next js-cs-reel-next">
                                <div class="btn__icon-wrapper">
                                    <svg class="btn__icon stroke-white stroke-width-2" width="58" height="48" aria-label="Next">
                                        <use xmlns:xlink="" href="/web/images/icons.svg#icon-arrow"> </use>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if ($allblogs->count()>0)
    <aside class="section bg-lightOffWhite">
        <div class="container">
            <div class="swiper js-slider overflow-visible" id="insights-reel">
                <div>
                    <h2 class="headline-3 mb-20em d-inline-block"> Our latest blogs & insights </h2>
                    <div class="swiper__btn-wrap">
                        <button type="button" class="btn btn--round-prev" aria-label="Previous resources">
                            <svg class="btn__icon rotate-180" width="32" height="26" role="img">
                                <use xmlns:xlink="" href="/web/images/icons.svg#icon-arrow"> </use>
                            </svg>
                        </button>
                        <button type="button" class="btn btn--round-next" aria-label="Next resources"> <svg class="btn__icon" width="32" height="26" role="img">
                                <use xmlns:xlink="" href="/web/images/icons.svg#icon-arrow"> </use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="swiper-wrapper animation-slideLeft">
                    @foreach($allblogs as $blog)
                    <a href="{{url('/our-blogs')}}/{{$blog->slug}}" title="{{$blog->title}}" class="block block--insight link-hover swiper-slide">
                        <picture class=" block__image-frame ">
                            <img class="block__image" width="5760" height="3713" src="/{{$blog->image}}" onerror="this.onerror=null;this.src='/assets/media/blankimg.svg'" alt="Read our blogs to Know more">
                        </picture>
                        @if(isset($blog->service))
                        <p class="block__preheadline"> {{$blog->service->name}} </p>
                        @else
                        <p class="block__preheadline"> Article </p>
                        @endif
                        <div class="block__title-wrap">
                            <h2 class="block__headline headline-5"> <span class="link-hover__text">{{$blog->title}}</span> </h2>
                            <svg class="block__icon link-hover__arrow" width="28" height="24" xmlns="" viewBox="0 0 61.21 53.63">
                                <g id="Icon_feather-arrow-down" data-name="Icon feather-arrow-down">
                                    <path id="horizontal-line" data-name="horizontal-line" d="M2,26.82H59.21" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                                    <path id="Path_33" data-name="Path 33" d="M34.43,2.83l24.78,23.99-24.78,23.99" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </div> <time class="block_time small-text" datetime="2023-06-29 00:00:00"> {{ \Carbon\Carbon::parse($blog->created_at)->format('jS F Y') }} </time>
                    </a>
                    @endforeach
                </div>
                <div class="scrollbar bg-lightOffWhite d-xl-none">
                    <div class="scrollbar__scroll js-insights-scrollbar"></div>
                </div>
            </div>
        </div>
    </aside>
    @endif

    @if($clients -> count()>0)
    <section class="section bg-gradient">
        <div class="content">
            <div class="container text-center">
                <h2 class="headline-2 mb-10em"> We only partner with the best </h2>
            </div>
        </div>
        <div class="container-fluid mt-25em js-marquee" data-speed="2" data-reverse="true" data-pausable="true">
            <div>
                @foreach($clients as $client)
                <div class="block block--small-rounded">
                    <figure class="block__picture"> <img class="block__image" src="/{{$client->logo}}" onerror="this.onerror=null;this.src='/assets/media/blankimg.svg'" width="252" height="109" alt="{{$client->imgAlt}}">
                    </figure>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
</main>


@endsection

@section('scripts')

@endsection