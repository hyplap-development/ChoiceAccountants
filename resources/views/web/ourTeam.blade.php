@extends('layouts.web')

@section('title')
Meet Experienced Our Team & Our People | Choice Accountants
@endsection

@section('meta')
<meta name="title" content="Meet Experienced Our Team & Our People | Choice Accountants">
<meta name="keywords" content="Our dedicated team,">
<meta property="og:type" content="website"/>
<meta property="og:image" itemprop="image" content="https://choice.accountants/web/images/logo.webp"/>
<meta property="og:description" content="Meet our dedicated professionals, driving our mission to success. Get to know our experienced team members today.">
<meta name="description" content="Meet our dedicated professionals, driving our mission to success. Get to know our experienced team members today.">
@endsection

@section('style')
@endsection

@section('content')
<header class="l-header l-header--padding-small bg-purple relative">
    <div class="container relative zindex-3">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1 class="headline-2 mb-0em"> Our people are the heroes behind our growth and customer success. </h1>
            </div>
        </div>
    </div>
    <div class="bg-shape-container zindex-1">
        <div class=" bg-shape quater-filled top left gradient-1 size-120  ">
            <div class="bg-shape__inner animation-rotateLeft90" data-animation-offset="100%"> </div>
        </div>
        <div class=" bg-shape quater-border-double bottom right color-white size-240 zindex-2">
            <div class="bg-shape__inner animation-rotateLeft90" data-animation-offset="100%"> </div>
        </div>
        <div class=" bg-shape full-filled centered-right-offset gradient-1 size-240">
            <div class="bg-shape__inner animation-rotateLeft90" data-animation-offset="100%"> </div>
        </div>
        <div class=" bg-shape half-border-double top right-10 color-white size-120">
            <svg class="animation-rotateLeft180" width="242" height="120">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" href="/web/images/icons.svg#icon-half-circle-shape-top"> </use>
            </svg>
        </div>
    </div>
</header>
<main>
    <div class="section">
        <div class="container-xxl flex-container flex-container--people">
            @foreach($teams as $team)
            <div class="card card--people bg-darkOffWhite flex-lg-row flex-md-row flex-column ">
                <figure class="card__figure">
                    <picture class=" card__picture ">
                        <img class="card__image" width="3960" height="2640" src="/{{$team->image}}" onerror="this.onerror=null;this.src='/assets/media/blankimg.svg'" alt="Meet Our Experienced team - ">
                    </picture>
                </figure>
                <div class="card__content">
                    <h2 class="card__name headline-4 mb-0em"> {{$team->name}}</h2>
                    <p class="card__position mt-5em mb-20em normal-text"> {{$team->designation}} </p>
                    <p class="card__text normal-text">{{$team->about}}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <section class="section bg-gradient overflow-hidden ">
        <div class="relative">
            <h2 class="headline-2 mb-0em marquee" data-text="As a team and as individuals, we give back to the community">
                As a team and as individuals, we give back to the community
            </h2>
        </div>
    </section>
    <div class="section ">
        <div class="swiper js-slider" id="image-carousel">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <picture class=" frame frame--carousel ">
                        <img class="frame__media" width="4256" height="2832" src="/web/images/pe1.webp" alt="Passing a bowl of food">
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture class=" frame frame--carousel ">
                        <img class="frame__media" width="5581" height="3721" src="/web/images/pe2.webp" alt="Planting trees">
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture class=" frame frame--carousel ">
                        <img class="frame__media" width="4256" height="2832" src="/web/images/pe3.webp" alt="Working in a homeless kitchen">
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture class=" frame frame--carousel ">
                        <img class="frame__media" width="6447" height="4281" src="/web/images/pe4.webp" alt="Working in a food bank">
                    </picture>
                </div>
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
</main>

@endsection

@section('scripts')
@endsection