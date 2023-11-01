@extends('layouts.web')

@section('title')
Career Opportunity in Accountancy Firm in Australia | Choice Accountants
@endsection

@section('meta')
@endsection

@section('style')
@endsection


@section('content')
<header class="l-header l-header--padding-small bg-purple relative">
    <div class="container relative zindex-3">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <p class="preheadline"> Choice careers </p>
                <h1 class="headline-2 mb-0em">Our people are the heroes responsible for our growth and customer success. </h1>
            </div>
        </div>
    </div>
    <div class="bg-shape-container zindex-1">
        <div class=" bg-shape quater-filled top left  size-96  ">
            <div class="bg-shape__inner animation-rotateLeft90" data-animation-offset="100%"> </div>
        </div>
        <div class="bg-shape half-border-double top right-10 color-white size-180 zindex-2"> <svg class="animation-rotateLeft180" width="242" height="120">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" href="/web/images/icons.svg#icon-half-circle-shape-top"> </use>
            </svg> </div>
        <div class="bg-shape quater-border-double bottom right color-white size-300 zindex-2 ">
            <div class="bg-shape__inner animation-rotateLeft90" data-animation-offset="100%"> </div>
        </div>
        <div class="bg-shape full-filled centered-right-offset  size-300 ">
            <div class="bg-shape__inner animation-rotateLeft90" data-animation-offset="100%"> </div>
        </div>
    </div>
</header>
<main class="l-main">
    <section class="section">
        <div class="row no-gutters">
            <div class="col-lg-4 bg-white   ">
                <picture class=" frame frame--image-covered frame--landscape ">
                    <img class="frame__media" width="6049" height="4033" src="/web/images/carrer.webp" alt="Team collaborating around a laptop">
                </picture>
            </div>
            <div class="col-lg-8 padding-xl-96-120 bg-white">
                <div class="relative zindex-3">
                    <div class=" content content--large-text">
                        <p>Choice Accountants, an Australian CPA firm, welcomes seasoned professionals and aspiring talents. Join
                            our diverse team of over 20 members, work on diverse financial projects, and enjoy benefits, learning
                            opportunities, and a respectful culture. Together, we shape the future of finance while advancing your
                            career.</p>
                    </div> <a class="mt-30em btn btn--primary " data-type="trackEvent" data-category="" data-action="" data-label="Explore open positions" data-value="" href="#listing" title="Explore open positions"> Explore
                        open positions </a>
                </div>
                <div class=" bg-shape quater-border-filled bottom right  size-96  ">
                    <div class="bg-shape__inner animation-rotateLeft90" data-animation-offset="100%"> </div>
                </div>
            </div>
        </div>
    </section>
    <section class=" section bg-gradient overflow-hidden ">
        <div class="relative">
            <h2 class="headline-2 mb-0em marquee" data-text="Collaborate - Innovate - Trust- Partner - Excel"> Collaborate -
                Innovate - Trust- Partner - Excel </h2>
        </div>
    </section>
    @if($careers->count() > 0)
    <section class="section" id=listing>
        <div class="container-fluid">
            <div class="grid grid--3-cols-heading-vertical bg-checkboard-3-box-head-img" style=" --checkboardFirstColor: #f7fbff; --checkboardSecondColor: #f0f5fa; ">
                <div class="grid__col grid__col--heading-1 padding-xl-72 align-center">
                    <div class="d-flex align-item-center relative zindex-3">
                        <h2 class="headline-2"> Open positions </h2>
                    </div>
                    <div class="bg-shape quater-border-double top left rotate-180 size-180 color-pink"> <span class="bg-shape__inner"></span> </div>
                </div>
                <div class="grid__col grid__col--heading-2">
                    <div class=" bg-shape quater-filled gradient-1 bottom right size-96"> <span class="bg-shape__inner"></span>
                    </div>
                </div>
                @foreach($careers as $key=>$career)
                @if($key%2 == 0)
                <a href="{{url('/about-choice/careers')}}/{{$career->slug}}" title="{{$career->title}}" class="grid__col card card--gradient-hover padding-xl-72 cardnostyle">
                    <div type="button" class="card__btn btn btn--round-prev"> <svg class="btn__icon" width="32" height="26" aria-hidden="true">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" href="/web/images/icons.svg#icon-arrow"> </use>
                        </svg> </div>
                    <h3 class="card__headline headline-4 mt-5em mb-20em">{{$career->title}}</h3>
                    <p class="card__text large-text">{{$career->subtitle}}</p>
                </a>
                @else
                <a href="{{url('/about-choice/careers')}}/{{$career->slug}}" title="{{$career->title}} &amp; CC Backbone Support Manager  - Hybrid/Remote" class="grid__col card card--gradient-hover padding-xl-72 cardnostyle">
                    <div type="button" class="card__btn btn btn--round-prev"> <svg class="btn__icon" width="32" height="26" aria-hidden="true">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" href="/web/images/icons.svg#icon-arrow"> </use>
                        </svg> </div>
                    <h3 class="card__headline headline-4 mt-5em mb-20em">{{$career->title}}</h3>
                    <p class="card__text large-text">{{$career->subtitle}}</p>
                </a>
                @endif
                @endforeach
            </div>
        </div>
    </section>
    @endif
    <section class="section section--p-none-bottom section--p-none-top">
        <div class="container-fluid">
            <div class="grid grid--3-cols-heading-vertical bg-checkboard-3-box-head-img" style=" --checkboardFirstColor: #f0f5fa; --checkboardSecondColor: #fff; ">
                <div class="grid__col grid__col--heading-1 bg-purple padding-xl-72">
                    <h2 class="headline-2 animation-fadeInUp"> Why Work for ? </h2>
                    <div class="bg-shape quater-border-double bottom right size-96"> <span class="bg-shape__inner animation-rotateLeft90" data-animation-delay="400"></span> </div>
                </div>
                <div class="grid__col grid__col--heading-2">
                    <picture class=" frame frame--image-covered frame--landscape ">
                        <img class="frame__media" width="7900" height="5269" src="/web/images/tea.webp" alt="Large team innovating together">
                    </picture>
                    <div class="bg-shape quater-filled color-pink top right size-96"> <span class="bg-shape__inner animation-rotateLeft90"></span> </div>
                </div>
                <div class="grid__col padding-xl-72">
                    <h3 class="headline-5"> Training & Qualifications </h3>
                    <div class="content">
                        <p> We prioritize your growth with substantial investments in learning and development, ensuring you're
                            well-prepared for your current role and future. </p>
                    </div>
                </div>
                <div class="grid__col padding-xl-72">
                    <h3 class="headline-5"> Flexible Working </h3>
                    <div class="content">
                        <p> Achieve work-life balance through our support for flexible and hybrid working arrangements. We provide
                            the tools for remote and office-based work, giving you the flexibility you need. </p>
                    </div>
                </div>
                <div class="grid__col padding-xl-72">
                    <h3 class="headline-5"> Health Insurance </h3>
                    <div class="content">
                        <p> Enjoy comprehensive private medical coverage with Bupa for yourself and reduced rates for your family.
                        </p>
                    </div>
                </div>
                <div class="grid__col padding-xl-72">
                    <h3 class="headline-5"> Volunteering Day Off </h3>
                    <div class="content">
                        <p>Celebrate your birthday with a day off to relax, and give back to the community with a dedicated day
                            for volunteering. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection

@section('scripts')
@endsection