@extends('layouts.web')

@section('title')
@if(isset($department->seo->title))
{{$department->seo->title}}
@endif
@endsection
@section('meta')
@if(isset($department->seo->metaTitle))
<meta name="title" content="{{ $department->seo->metaTitle }}">
@endif
@if(isset($department->seo->metaDescription))
<meta name="description" content="{{$department->seo->metaDescription}}">
@endif
@if(isset($department->seo->metaKeyword))
<meta name="keywords" content="{{$department->seo->metaKeyword}}">
@endif

@if(isset($department->seo->metaRobot))
<meta name="robots" content="{{$department->seo->metaRobot}}">
@endif
@if(isset($department->seo->metaAuthor))
<meta name="author" content="{{$department->seo->metaAuthor}}">
@endif
@if(isset($department->seo->ogTitle))
<meta property="og:title" content="{{$department->seo->ogTitle}}">
@endif
@if(isset($department->seo->ogDescription))
<meta property="og:description" content="{{$department->seo->ogDescription}}">
@endif
@if(isset($department->seo->ogImage))
<meta name="og:image" content="{{$department->seo->ogImage}}">
@endif
@if(isset($department->seo->twitterTitle))
<meta name="twitter:title" content="{{$department->seo->twitterTitle}}">
@endif
@if(isset($department->seo->twitterDescription))
<meta name="twitter:description" content="{{$department->seo->twitterDescription}}">
@endif
@if(isset($department->seo->twitterImage))
<meta name="twitter:image" content="{{$department->seo->twitterImage}}">
@endif
@if(isset($department->seo->twitterType))
<meta name="twitter:card" content="{{$department->seo->twitterType}}">
@endif
@if(isset($department->seo->fbogTitle))
<meta name="facebook:title" content="{{$department->seo->fbogTitle}}">
@endif
@if(isset($department->seo->fbogDescription))
<meta name="facebook:description" content="{{$department->seo->fbogDescription}}">
@endif
@if(isset($department->seo->fbogType))
<meta property="og:type" content="{{$department->seo->fbogType}}">
@endif
@if(isset($department->seo->fbogSiteName))
<meta property="og:site_name" content="{{$department->seo->fbogSiteName}}">
@endif
@if(isset($department->seo->ipTitle))
<meta itemprop="name" content="{{$department->seo->ipTitle}}">
@endif
@if(isset($department->seo->ipDescription))
<meta itemprop="description" content="{{$department->seo->ipDescription}}">
@endif
@if(isset($department->seo->dcTitle))
<meta name="DC.title" content="{{$department->seo->dcTitle}}">
@endif
@if(isset($department->seo->dcDescription))
<meta name="DC.description" content="{{$department->seo->dcDescription}}">
@endif
@if(isset($department->seo->dcCreator))
<meta name="DC.creator" content="{{$department->seo->dcCreator}}">
@endif
@if(isset($department->seo->schema1))
{!!$department->seo->schema1!!}
@endif
@if(isset($department->seo->schema2))
{!!$department->seo->schema2!!}
@endif
@endsection


@section('style')
@endsection

@section('content')
<header class="l-header l-header--full-height">
    <div class="grid grid--xl-50-50 relative">
        <div class="grid__col grid__col--center-content grid__col--4k-pushed-to-right relative zindex-3 padding-xl-120">
            <div class="grid__col-content max-width-600">
                <div class="breadcrumbs ">
                    <ul> </ul>
                </div>
                <h1 class="headline-2 mb-10em cover-pseudo animation-css overflow-hidden">{{$department->title}}</h1>
                <div class="animation-fadeInUp mobile-no-animation" data-animation-delay="600">
                    <div class="content mb-30em">
                        <p style="white-space:pre-line;">{{$department->shortDescription}}</p>
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
                <img class="frame__media" width="1200" height="1200" decoding="async" src="/{{$department->bannerImage}}" onerror="this.onerror=null;this.src='/assets/media/blankimg.svg'" alt="{{$department->bannerImgAlt}}">
            </picture>
            <div class="cover animation-slideOut no-mobile-animation zindex-3" data-animation-delay="200"></div>
            <div class="bg-shape quater-border-filled gradient-3 top right rotate-270 size-180">
                <div class="bg-shape__inner animation-rotateRight90 mobile-no-animation" data-animation-delay="600"> </div>
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
    <section class="section bg-gradient color-white   ">
        <div class="content container color-white  ">
            <div class="row row--g-20">
                <div class="col-sm-12">
                    <h2 class="headline-2" style="text-align: center;">{{$department->subtitle}}</h2>
                    <p style="text-align:center;">{{$department->description}}</p>
                </div>
            </div>
        </div>
    </section>
    @foreach($depservices as $key => $depservice)
    @if($key % 2 == 0)
    <section class="section">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class=" col-xl-6  order-lg-2  ">
                    <picture class=" frame frame--image-covered frame--square-touch frame--landscape-tablet frame--landscape-desktop ">
                        <img class="frame__media" width="1000" height="600" src="/{{$depservice->coverImage}}" onerror="this.onerror=null;this.src='/assets/media/blankimg.svg'" alt="{{$depservice->coverImageAltTag}}">
                    </picture>
                </div>
                <div class=" col-xl-6 padding-xl-96-120 center-content-y  order-lg-1 ">
                    <div class="content">
                        <h3 class="headline-2 mb-5em headline-3">{{$depservice->name}}</h3>
                        <p style="white-space: pre-line;">{{$depservice->homePageDesc}}</p>
                        <a class="mt-20em btn btn--primary " href="{{url('/our-services')}}/{{$depservice->department ? $depservice->department->slug : ''}}/{{$depservice->slug}}" title="{{$depservice->name}}">
                            Read More </a>
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
                <div class=" col-xl-6 padding-xl-96-120 center-content-y  order-lg-1 ">
                    <div class=" content   ">
                        <h3 class="headline-2 mb-5em headline-3">{{$depservice->name}}</h3>
                        <p style="white-space: pre-line;">{{$depservice->homePageDesc}}</p>
                        <a class="mt-20em btn btn--primary " href="{{url('/our-services')}}/{{$depservice->department ? $depservice->department->slug : ''}}/{{$depservice->slug}}" title="{{$depservice->name}}">
                            Read More </a>
                        <a class="mt-20em btn btn--primary" data-bs-toggle="modal" data-bs-target="#enquirymodal" title="Enquire now" style="margin-left: 15px;">
                            Enquiry now
                        </a>
                    </div>
                </div>
                <div class="col-xl-6  ">
                    <picture class=" frame frame--image-covered frame--square-touch frame--landscape-tablet frame--landscape-desktop ">
                        <img class="frame__media" width="1000" height="600" src="/{{$depservice->coverImage}}" onerror="this.onerror=null;this.src='/assets/media/blankimg.svg'" alt="{{$depservice->coverImageAltTag}}">
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