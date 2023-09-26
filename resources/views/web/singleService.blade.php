@extends('layouts.web')

@section('title')
{{$service->name}} | Choice Accountants Australia
@endsection

@section('meta')
<link rel="canonical" href="{{url('/our-services')}}/{{$service->department ? $service->department->slug : ''}}/{{$service->slug}}" />
@if(isset($service->seo->metaTitle))
<meta name="title" content="{{ $service->seo->metaTitle }}">
@endif
@if(isset($service->seo->metaDescription))
<meta name="description" content="{{$service->seo->metaDescription}}">
@endif
@if(isset($service->seo->metaKeyword))
<meta name="keywords" content="{{$service->seo->metaKeyword}}">
@endif
@if(isset($service->seo->title))
<title>{{$service->seo->title}}</title>
@endif
@if(isset($service->seo->metaRobot))
<meta name="robots" content="{{$service->seo->metaRobot}}">
@endif
@if(isset($service->seo->metaAuthor))
<meta name="author" content="{{$service->seo->metaAuthor}}">
@endif
@if(isset($service->seo->ogTitle))
<meta property="og:title" content="{{$service->seo->ogTitle}}">
@endif
@if(isset($service->seo->ogDescription))
<meta property="og:description" content="{{$service->seo->ogDescription}}">
@endif
<meta property="og:url" content="{{url('/our-services')}}/{{$service->department ? $service->department->slug : ''}}/{{$service->slug}}">
@if(isset($service->seo->ogImage))
<meta name="og:image" content="{{$service->seo->ogImage}}">
@endif
@if(isset($service->seo->twitterTitle))
<meta name="twitter:title" content="{{$service->seo->twitterTitle}}">
@endif
@if(isset($service->seo->twitterDescription))
<meta name="twitter:description" content="{{$service->seo->twitterDescription}}">
@endif
@if(isset($service->seo->twitterImage))
<meta name="twitter:image" content="{{$service->seo->twitterImage}}">
@endif
@if(isset($service->seo->twitterType))
<meta name="twitter:card" content="{{$service->seo->twitterType}}">
@endif
@if(isset($service->seo->fbogTitle))
<meta name="facebook:title" content="{{$service->seo->fbogTitle}}">
@endif
@if(isset($service->seo->fbogDescription))
<meta name="facebook:description" content="{{$service->seo->fbogDescription}}">
@endif
@if(isset($service->seo->fbogType))
<meta property="og:type" content="{{$service->seo->fbogType}}">
@endif
@if(isset($service->seo->fbogSiteName))
<meta property="og:site_name" content="{{$service->seo->fbogSiteName}}">
@endif
@if(isset($service->seo->ipTitle))
<meta itemprop="name" content="{{$service->seo->ipTitle}}">
@endif
@if(isset($service->seo->ipDescription))
<meta itemprop="description" content="{{$service->seo->ipDescription}}">
@endif
@if(isset($service->seo->dcTitle))
<meta name="DC.title" content="{{$service->seo->dcTitle}}">
@endif
@if(isset($service->seo->dcDescription))
<meta name="DC.description" content="{{$service->seo->dcDescription}}">
@endif
@if(isset($service->seo->dcCreator))
<meta name="DC.creator" content="{{$service->seo->dcCreator}}">
@endif
@if(isset($service->seo->schema1))
{!!$service->seo->schema1!!}
@endif
@if(isset($service->seo->schema2))
{!!$service->seo->schema2!!}
@endif
@endsection

@section('style')
<style>
    body {

        background-color: #f0f0f0;
    }

    #custom-form {
        /* max-width: 400px; */
        margin: 0 auto;
        /* padding: 20px; */
        /* background-color: #fff; */
        /* border: 1px solid #ddd; */
        border-radius: 5px;
        /* box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); */
    }

    label {
        display: block;
        margin-bottom: 6px;
        /* font-weight: bold; */
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    textarea {
        resize: vertical;
    }

    button[type="submit"] {
        background-color: #fff;
        color: #268d44;
        border: none;
        padding: 10px 20px;
        border-radius: 3px;
        cursor: pointer;
        width: 100%;
    }

    button[type="submit"]:hover {
        background-color: #268d44;
    }

    #privacy-policy {
        margin-top: 10px;
    }
</style>
@endsection

@section('content')
<header class="l-header">
    <div class="container-fluid relative">
        <div class="row no-gutters">
            <div class="col-xl-8 bg-purple padding-module relative">
                <div class="max-width-720">
                    <div class="breadcrumbs ">
                        <ul>
                            <li><a href="{{url('/our-services')}}">Our Services</a></li>
                            <li><a href="{{url('/our-services')}}/{{$service->department->slug}}">{{$service->department ? $service->department->name : ''}}</a></li>
                            <li>{{$service->name}}</li>
                        </ul>
                    </div>
                    <hr>
                    <h1 class="headline-2 mb-5em">{{$service->name}}</h1>
                    <div class="content col-75">
                        <p style="white-space: pre-line;">{{$service->subtitle}} </p>
                    </div>
                </div>
                <div class="bg-shape quater-border-double bottom left color-white size-144  ">
                    <div class="bg-shape__inner animation-rotateLeft90" data-animation-offset="100%"> </div>
                </div>
                <div class="bg-shape quater-border-filled bottom right gradient-1 size-96  ">
                    <div class="bg-shape__inner animation-rotateLeft90" data-animation-offset="100%"> </div>
                </div>
            </div>
            <div class="col-xl-4 relative">
                <picture class=" frame frame--image-covered frame--landscape-larger-mobile frame--landscape-tablet ">
                    <img class="frame__media" width="1536" height="1920" decoding="async" src="/{{$service->coverImage}}" onerror="this.onerror=null;this.src='/assets/media/blankimg.svg'" alt="{{$service->coverImageAltTag}}">
                </picture>
                <div class=" bg-shape quater-border-double bottom left color-white size-96  ">
                    <div class="bg-shape__inner animation-rotateLeft90" data-animation-offset="100%"> </div>
                </div>
                <div class=" bg-shape quater-filled top right color-pink size-120  ">
                    <div class="bg-shape__inner animation-rotateLeft90" data-animation-offset="100%"> </div>
                </div>
            </div>
        </div>
        <div class="filters mt-0em js-sticky" data-sticky-class="sticked" data-sticky-for="767">
            <a href="#section-0" title="Background" class="filters__btn btn--block"> <span class="btn__text">Introduction</span> </a>
            <a href="#section-1" title="Solution" class="filters__btn btn--block"> <span class="btn__text">Why It Is Necessary</span></a>
            <a href="#section-2" title="Testimonial" class="filters__btn btn--block"> <span class="btn__text">How Choice Will Help</span> </a>
            <a href="#section-4" title="Technology" class="filters__btn btn--block"> <span class="btn__text">Conclusion</span> </a>
            <a href="#section-6" title="The Results" class="filters__btn btn--block"> <span class="btn__text">Enquire Now</span> </a>
        </div>
    </div>
</header>
<main>
    @if($service->intropara1 || $service->intropara2)
    <div id="section-0">
        <header class="section bg-lightOffWhite">
            <div class="content">
                <div class="container text-left">
                    <h2 class="headline-2 mb-10em"> Introduction To {{$service->name}} </h2>
                </div>
            </div>
            <div class="content zindex-3 container">
                <div class="row row--g-60">
                    <div class="col-md-10 col-lg-6">
                        <p style="white-space: pre-line;">{{$service->intropara1}}</p>
                        <p></p>
                    </div>
                    <div class="col-md-10 col-lg-6">
                        <p style="white-space: pre-line;">{{$service->intropara2}}</p>
                    </div>
                    <p><a href="{{url('/get-in-touch')}}" class="btn btn--primary mt-3">Contact Us</a></p>

                </div>
            </div>
        </header>
    </div>
    @endif
    <div id="section-1">
        <section class="section ">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <picture class=" frame frame--image-covered frame--landscape ">
                        <img class="frame__media" width="1920" height="1920" src="/{{$service->necessaryImage}}" onerror="this.onerror=null;this.src='/assets/media/blankimg.svg'" alt="{{$service->necessaryImageAltTag}}">
                    </picture>
                </div>
                <div class=" col-lg-8 padding-xl-96-120">
                    <div class="relative zindex-3">
                        <div class=" content content--large-text">
                            <h3 class="headline-3">Understand why it is necessary</h3>
                            @if($service->nt1 && $service->nta1)
                            <p>
                                <strong> {{$service->nt1}}:</strong>
                                {{$service->nta1}}
                            </p>
                            @endif
                            @if($service->nt2 && $service->nta2)
                            <p>
                                <strong> {{$service->nt2}}:</strong>
                                {{$service->nta2}}
                            </p>
                            @endif
                            @if($service->nt3 && $service->nta3)
                            <p>
                                <strong> {{$service->nt3}}:</strong>
                                {{$service->nta3}}
                            </p>
                            @endif
                            @if($service->nt4 && $service->nta4)
                            <p>
                                <strong> {{$service->nt4}}:</strong>
                                {{$service->nta4}}
                            </p>
                            @endif
                            @if($service->nt5 && $service->nta5)
                            <p>
                                <strong> {{$service->nt5}}:</strong>
                                {{$service->nta5}}
                            </p>
                            @endif
                            <p><a href="{{url('/get-in-touch')}}" class="btn btn--primary">Contact Us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="section-2">
        <section class="section">
            <div class="grid grid--xl-50-50 relative">
                <div class="relative grid__col grid__col--center-content bg-purple padding-xl-96 bg-next-el-tone-down">
                    <div class="grid__col-content ">
                        <h2 class="headline-2 mb-10em"> Choice Accountant Saves you in every aspect </h2>
                        <p class="normal-text weight-500 mt-0em mb-5em"> Empowering Your Business with Proficiency </p>
                        <p class="normal-text mt-0em mb-0em">{{$service->name}}</p>
                    </div>
                </div>
                <div class="grid__col grid__col--stretch-content padding-xl-96 relative bg-next-el">
                    <div class="blockquote content ">
                        <p>
                            <span>Maximizing returns while ensuring compliance is our commitment to your success. With a keen focus
                                on accurate reporting, transparent processes, and tailored strategies, Choice Accountants is dedicated
                                to optimizing your {{$service->name}}. Trust us to navigate the complexities while you focus on growing
                                your business.
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="section-3">
        <section class="section ">
            <div class="container-fluid">
                <div class="row">
                    @if($service->st1 && $service->sta1)
                    <div class="col-xl-4 padding-xl-72">
                        <div class="content ">
                            <h2 class="headline-2 mb-10em"> {{$service->st1}} </h2>
                            <p><span>{{$service->sta1}}</span></p>
                        </div>
                    </div>
                    @endif
                    @if($service->st2 && $service->sta2)
                    <div class="col-xl-4 padding-xl-72 bg-lightOffWhite">
                        <div class="content ">
                            <h2 class="headline-2 mb-10em"> {{$service->st2}} </h2>
                            <p><span>{{$service->sta2}}</span></p>
                        </div>
                    </div>
                    @endif
                    @if($service->st3 && $service->sta3)
                    <div class="col-xl-4 padding-xl-72">
                        <div class="content ">
                            <h2 class="headline-2 mb-10em"> {{$service->st3}} </h2>
                            <p><span>{{$service->sta3}}</span></p>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="row" style="margin-top: 2%;">
                    @if($service->st4 && $service->sta4)
                    <div class="col-xl-4 padding-xl-72 ">
                        <div class="content ">
                            <h2 class="headline-2 mb-10em"> {{$service->st4}} </h2>
                            <p><span>{{$service->sta4}}</span></p>
                        </div>
                    </div>
                    @endif
                    @if($service->st5 && $service->sta5)
                    <div class="col-xl-4 padding-xl-72 bg-lightOffWhite">
                        <div class="content ">
                            <h2 class="headline-2 mb-10em"> {{$service->st5}} </h2>
                            <p><span>{{$service->sta5}}</span></p>
                        </div>
                    </div>
                    @endif
                    @if($service->st6 && $service->sta6)
                    <div class="col-xl-4 padding-xl-72">
                        <div class="content ">
                            <h2 class="headline-2 mb-10em"> {{$service->st6}} </h2>
                            <p><span>{{$service->sta6}}</span></p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </section>
    </div>
    @if($service->conclusion)
    <div id="section-4">
        <section class="section ">
            <div class="row no-gutters">
                <div class=" col-lg-4    ">
                    <picture class=" frame frame--image-covered frame--landscape ">
                        <img class="frame__media" width="1280" height="1920" src="/{{$service->conclusionImage}}" onerror="this.onerror=null;this.src='/assets/media/blankimg.svg'" alt="{{$service->conclusionImageAltTag}}">
                    </picture>
                </div>
                <div class="col-lg-8 padding-xl-96-120 bg-darkOffWhite">
                    <div class="relative zindex-3">
                        <div class=" content content--large-text  ">
                            <h3 class="headline-3" id="section6">Conclusion</h3>
                            <p style="white-space: pre-line;">{{$service->conclusion}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endif
    <div id="section-6">
        <div class="grid grid--xl-50-50 relative">
            <div class="grid__col grid__col--center-content grid__col--4k-pushed-to-right padding relative zindex-3">
                <div class="grid__col-content max-width-600 relative zindex-3">
                    <div class="col-75">
                        <h1 class="headline-2 mb-10em"> Get in Touch </h1>
                        <div class="content mb-30em">
                            <p>Our friendly team is on hand to answer any questions, we're all happy to help.</p>
                        </div>
                    </div>
                    <div class="block padding-sm bg-lightOffWhite relative">
                        <h2 class="headline-4">Contact Us At</h2>
                        <div class="content mb-2">
                            <p>Our friendly team is on hand to answer any questions, we're all happy to help.</p>
                        </div>
                        <div class="grid grid--50-50-gapped mt-20em">
                            <div class="link-block link-block--contact">
                                <div class="d-flex align-items-center justify-content-start gap-2">
                                    <i class="fa-solid fa-phone fs-10px iconstyle"></i> <span class="link-block__label small-text Fw-500 p-0"> Sales </span>
                                </div>
                                <a href="tel:+61 2 8717 2222" class="link-block__link link-hover normal-text" title="Call Sales">
                                    <span class="link-hover__text"> +61 2 8717 2222 </span> </a>
                            </div>
                            <div class="link-block link-block--contact">
                                <div class="d-flex align-items-center justify-content-start gap-2">
                                    <i class="fa-solid fa-phone fs-10px iconstyle"></i> <span class="link-block__label small-text Fw-500 p-0"> Support </span>
                                </div>
                                <a href="tel:+61 2 8717 2222" class="link-block__link link-hover normal-text">
                                    <span class="link-hover__text"> +61 2 8717 2222 </span> </a>
                            </div>
                            <div class="link-block link-block--contact">
                                <div class="d-flex align-items-center justify-content-start gap-2">
                                    <i class="fa-solid fa-envelope fs-10px iconstyle"></i> <span class="link-block__label small-text Fw-500 p-0"> Email </span>
                                </div>
                                <a href="mailto:hello@choice.accountants" class="link-block__link link-hover normal-text" title="Email us">
                                    <span class="link-hover__text">hello@choice.accountants
                                    </span> </a>
                            </div>
                            <div class="link-block link-block--contact">
                                <div class="d-flex align-items-center justify-content-start gap-2">
                                    <i class="fa-solid fa-comment fs-10px iconstyle"></i> <span class="link-block__label small-text Fw-500 p-0"> Chat </span>
                                </div>
                                <a href="{{url('/')}}" class="link-block__link link-hover normal-text" title="Open the chat">
                                    <span class="link-hover__text">Go to Live Chat </span> </a>
                            </div>
                            <div class="link-block link-block--contact">
                                <div class="d-flex align-items-center justify-content-start gap-2">
                                    <i class="fa-solid fa-user fs-10px iconstyle"></i> <span class="link-block__label small-text Fw-500 p-0"> Login </span>
                                </div>
                                <a href="https://platinumaccountants.portal.accountants/login" class="link-block__link link-hover normal-text" target="_blank" title="CZone Portal">
                                    <span class="link-hover__text"> MYOB Login </span> </a>
                            </div>
                        </div>
                        <div class="bg-shape size-96 full-border-filled gradient-3 bottom-right-outside zindex-below color-white">
                            <div class=" bg-shape__inner animation-fadeInUp mobile-no-animation " data-animation-delay="600"> </div>
                        </div>
                    </div>
                </div>
                <div class="bg-shape size-96 quater-filled gradient-1 top left rotate-180 color-white">
                    <div class=" bg-shape__inner animation-rotateRight90 mobile-no-animation " data-animation-delay="600"> </div>
                </div>
            </div>
            <div class="grid__col grid__col--center-content grid__col--4k-pushed-to-left padding-lg bg-lightOffWhite relative">
                <div class=" form form--card bg-purple max-width-720 form-wrapper-18 " style="padding: 1.5rem;">
                    <div class="relative zindex-3">
                        <div class="classdiv">
                            <h2 class="headline-3 mb-5em js-form-headline"> Send a message </h2>
                            <div class="content mb-10em js-form-content">
                                <p> We aim to respond to all enquiries within 24 hours. </p>
                            </div>
                        </div>
                        <div class="form-wrapper-18">
                            <div class="js-form-content">
                                <form action="{{url('/save')}}" id="custom-form1" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" novalidate>
                                    @csrf
                                    <label for="fname">First Name *</label>
                                    <input type="text" id="fname1" name="fname" placeholder="Enter Your First Name" onkeyup="checkfname()">
                                    <span id="nameerror1"></span>

                                    <label for="lname">Last Name *</label>
                                    <input type="text" id="lname1" name="lname" placeholder="Enter Your First Name" onkeyup="checklname()">
                                    <span id="lnameerror1"></span>

                                    <label for="email">Email *</label>
                                    <input type="email" id="email1" name="email" placeholder="Enter Your Email" onkeyup="checkemail()">
                                    <span id="emailerror1"></span>

                                    <label for="phone">Phone Number *</label>
                                    <input type="tel" id="phone1" name="phone" placeholder="Enter Your Phone No" onkeyup="checknum()" maxlength="10">
                                    <span id="numbererror1"></span>

                                    <label for="service">Services *</label>
                                    <select name="serviceId" id="serviceId1" style="margin-bottom: 12px;border: 1px solid #ccc;border-radius: 3px;">
                                        <option value="{{$service->id}}">{{$service->name}}</option>
                                    </select>
                                    <span id="selecterror1"></span>

                                    <label for="company">Company Name</label>
                                    <input type="text" id="companyName1" name="companyName" placeholder="Enter Company Name">

                                    <label for="message">Message/Question</label>
                                    <textarea id="message1" name="message" placeholder="Enter Your Message"></textarea>

                                    <div id="privacy-policy">
                                        <label for="privacy-policy">By submitting this form, you consent to our <a href="{{url('/privacy-policy')}}" target="_blank">privacy policy</a>.</label>
                                    </div>

                                    <button type="button" class="submitformbtn" id="submit-button1">Submit Details</button>

                                </form>
                                <div id="thankyouContactDiv" style="display: none;">
                                    <div class="" style=" display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                        <h2>Thank You</h2>
                                        <p>We have received your enquiry. We aim to respond to all enquiries within 24 hours. In case of emergency you can contact to given number.Meanwhile, feel free to explore our website.</p>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <a href="tel:+61 2 8717 2222" type="button" class="btn btn--secondary btn--purple mt-10em">Call Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-shape size-144 quater-border-filled gradient-3 top right rotate-270">
                        <div class=" bg-shape__inner animation-rotateRight90 mobile-no-animation" data-animation-delay="600">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(isset($blog->service))
    <div id="section-7">
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
                            <button type="button" class="btn btn--round-next" aria-label="Next resources">
                                <svg class="btn__icon" width="32" height="26" role="img">
                                    <use xmlns:xlink="" href="/web/images/icons.svg#icon-arrow"> </use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="swiper-wrapper animation-slideLeft">
                        @foreach($serviceblogs as $serviceblog)
                        <a href="{{url('/our-blogs')}}/{{$serviceblog->slug}}" title="{{$serviceblog->title}}" class="block block--insight link-hover swiper-slide">
                            <picture class=" block__image-frame ">
                                <img class="block__image" width="5760" height="3713" src="/{{$serviceblog->image}}" onerror="this.onerror=null;this.src='/assets/media/blankimg.svg'" alt="{{$serviceblog->imgAlt}}">
                            </picture>
                            @if(isset($serviceblog->service))
                            <p class="block__preheadline"> {{$serviceblog->service->name}} </p>
                            @else
                            <p class="block__preheadline"> Article </p>
                            @endif
                            <div class="block__title-wrap">
                                <h2 class="block__headline headline-5"> <span class="link-hover__text">{{$serviceblog->title}}</span> </h2>
                                <svg class="block__icon link-hover__arrow" width="28" height="24" xmlns="" viewBox="0 0 61.21 53.63">
                                    <g id="Icon_feather-arrow-down" data-name="Icon feather-arrow-down">
                                        <path id="horizontal-line" data-name="horizontal-line" d="M2,26.82H59.21" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                                        <path id="Path_33" data-name="Path 33" d="M34.43,2.83l24.78,23.99-24.78,23.99" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                </svg>
                            </div> <time class="block_time small-text" datetime="2023-06-29 00:00:00"> {{ \Carbon\Carbon::parse($serviceblog->created_at)->format('jS F Y') }} </time>
                        </a>
                        @endforeach
                    </div>
                    <div class="scrollbar bg-lightOffWhite d-xl-none">
                        <div class="scrollbar__scroll js-insights-scrollbar"></div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    @endif
</main>

@endsection

@section('scripts')
<script>
    function checkemail() {
        var emailInput = document.getElementById('email1');
        var emailValidation = document.getElementById('emailerror1');
        var button = document.getElementById('submit-button1');

        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (emailInput.value.match(emailRegex)) {
            emailValidation.textContent = '';
            button.disabled = false;
        } else {
            emailValidation.textContent = 'Please enter valid email';
            emailValidation.style.color = 'red';
            button.disabled = true;

        }
    }

    function checknum() {
        var numberInput = document.getElementById('phone1');
        var numberValidation = document.getElementById('numbererror1');
        var button = document.getElementById('submit-button1');

        var numberRegex = /^[0-9]{10}$/;

        if (numberInput.value.match(numberRegex)) {
            numberValidation.textContent = '';
            button.disabled = false;
        } else {
            numberValidation.textContent = 'Please enter valid phone number';
            numberValidation.style.color = 'red';
            button.disabled = true;
        }
    }

    function checkfname() {
        var fnameInput = document.getElementById('fname1');
        var fnameValidation = document.getElementById('nameerror1');
        var button = document.getElementById('submit-button1');

        var fnameRegex = /^[a-zA-Z ]*$/;

        if (fnameInput.value.match(fnameRegex)) {
            fnameValidation.textContent = '';
            button.disabled = false;
        } else {
            fnameValidation.textContent = 'Please enter valid name';
            fnameValidation.style.color = 'red';
            button.disabled = true;
        }
    }

    function checklname() {
        var lnameInput = document.getElementById('lname1');
        var lnameValidation = document.getElementById('lnameerror1');
        var button = document.getElementById('submit-button1');

        var lnameRegex = /^[a-zA-Z ]*$/;

        if (lnameInput.value.match(lnameRegex)) {
            lnameValidation.textContent = '';
            button.disabled = false;
        } else {
            lnameValidation.textContent = 'Please enter valid name';
            lnameValidation.style.color = 'red';
            button.disabled = true;
        }
    }
</script>

<script>
    document.getElementById('submit-button1').addEventListener('click', function(event) {
        event.preventDefault();
        var fname = document.getElementById('fname1').value;
        var lname = document.getElementById('lname1').value;
        var phone = document.getElementById('phone1').value;
        var email = document.getElementById('email1').value;
        var serviceId = document.getElementById('serviceId1').value;
        var nameError = document.getElementById('nameerror1');
        var lnameError = document.getElementById('lnameerror1');
        var numberError = document.getElementById('numbererror1');
        var emailError = document.getElementById('emailerror1');
        var selectError = document.getElementById('selecterror1');

        nameError.textContent = '';
        lnameError.textContent = '';
        numberError.textContent = '';
        emailError.textContent = '';
        selectError.textContent = '';

        if (fname.trim() === '') {
            nameError.textContent = 'Please enter first name';
            nameError.style.color = 'red';
        }

        if (lname.trim() === '') {
            lnameError.textContent = 'Please enter last name';
            lnameError.style.color = 'red';
        }

        if (email.trim() === '') {
            emailError.textContent = 'Please enter email';
            emailError.style.color = 'red';
        }

        if (phone.trim() === '') {
            numberError.textContent = 'Please enter phone number';
            numberError.style.color = 'red';
        }

        if (serviceId === '') {
            selectError.textContent = 'Please select service';
            selectError.style.color = 'red';
        }


        if (fname.trim() === '' || phone.trim() === '' || email.trim() === '' || lname.trim() === '' || serviceId === '') {
            return;
        }

        var formData = new FormData($('#custom-form1')[0]);
        $.ajax({
            type: "POST",
            url: "{{ url('/save') }}",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $('.classdiv h2').fadeOut(400);
                $('#custom-form1').fadeOut(400);
                $('.classdiv .content p').fadeOut(400, function() {
                    $('#thankyouContactDiv').fadeIn(700);
                });
            },
            error: function(response) {
                console.log(response);
            }
        });

    });
</script>
@endsection