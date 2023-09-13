@extends('layouts.web')

@section('title')
Choice Accountants Story & Process we follow | Choice Accountants
@endsection

@section('meta')
@show

@section('style')
@endsection

@section('content')
<header class="l-header l-header--full-height animation-css">
    <div class="grid grid--xl-50-50 relative">
        <div class="relative grid__col grid__col--center-content grid__col--4k-pushed-to-right padding-xl-180">
            <div class="grid__col-content max-width-575">
                <p class="preheadline extra-large-text mb-10em cover-pseudo animation-css">Our Story Behind Choice</p>
                <h1 class="headline-2 mb-10em cover-pseudo animation-css">20 Years of Vision, Creativity & Expertise </h1>
                <div class="content  animation-fadeInUp mobile-no-animation" data-animation-delay="400">
                    <p>Founded by visionary Raj Prasad, Choice Accountants redefines accounting services with a focus on
                        value-driven solutions and client commitment. With over two decades of experience, we're a trusted partner
                        for private and public organizations. Our dedicated team of CPAs guides you towards financial excellence,
                        offering personalized strategies. Choose us as your go-to CPA firm for prosperity and unmatched financial
                        support.</p>
                </div>
            </div>
            <div class="bg-shape quater-border-filled gradient-3 size-96 top right rotate-270 ">
                <div class="bg-shape__inner animation-rotateRight90 mobile-no-animation" data-animation-delay="1000"> </div>
            </div>
            <div class=" bg-shape quater-filled gradient-1 size-144 bottom left rotate-90 ">
                <div class=" bg-shape__inner animation-rotateLeft90 mobile-no-animation" data-animation-delay="600" data-animation-offset="100%"> </div>
            </div>
        </div>
        <div class="grid__col grid__col--with-img grid__col--stretch-content grid__col--touch-dev-landscape relative">
            <picture class=" frame frame--stretch ">
                <img class="frame__media" width="1920" height="2160" decoding="async" src="/web/images/abt.png" alt="Writing a story">
            </picture>
            <div class=" overlay overlay--small animation-css no-mobile-animation"> </div>
            <div class=" bg-shape quater-border-double color-white size-96 top left rotate-180">
                <div class="bg-shape__inner animation-rotateRight90 mobile-no-animation" data-animation-delay="1400"> </div>
            </div>
            <div class=" bg-shape half-border-filled gradient-1 bottom right-cut zindex-3">
                <div class=" bg-shape__inner animation-rotateLeft180 mobile-no-animation" data-animation-delay="600" data-animation-offset="100%"> </div>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="section ">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-xl-4 padding-xl-72 bg-lightOffWhite">
                    <div class="content ">
                        <p>Founded as Choice Accountants in 2023, we've prioritized clients' needs, delivering expertise and
                            personalized financial solutions, setting a transformative accounting service approach.</p>
                    </div>
                    <div class="bg-shape full-border-single color-pink btw-cols">
                        <div class="bg-shape__inner animation-fadeIn"></div>
                    </div>
                </div>
                <div class="col-xl-4 padding-xl-72 bg-darkOffWhite">
                    <div class="content ">
                        <p>Through our evolution, we've led the CPA industry, innovating for unique financial challenges. Deep
                            market knowledge lets us create bespoke solutions, driven by client needs.</p>
                    </div>
                    <div class="bg-shape full-border-single color-pink btw-cols">
                        <div class="bg-shape__inner animation-fadeIn"></div>
                    </div>
                </div>
                <div class="col-xl-4 padding-xl-72 bg-lightOffWhite">
                    <div class="content ">
                        <p>We excel in seamlessly integrating financial technology for client prosperity. Choose Choice
                            Accountants, your trusted financial partner, for a journey to achieve your financial goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <header class="section bg-purple">
        <div class="content">
            <div class="container text-left ">
                <h3 class="headline-3 mb-10em "> How we work </h3>
            </div>
        </div>
        <div class=" content zindex-3 container">
            <div class="row row--g-60 content__large-text ">
                <div class="col-md-10 col-lg-6">
                    <p class="p1">At Choice Accountants, we redefine what it means to be a value-added reseller. Our team
                        comprises approachable, seasoned experts with a wealth of knowledge in various financial domains,
                        including Legal & Statutory Services, Small business support, Budiness Advisory Services & manufacturing &
                        Logistics Solutions</p>
                </div>
                <div class="col-md-10 col-lg-6">
                    <p class="p1">At Choice Accountants, our distinction lies in our steadfast commitment to providing
                        unparalleled value. We pride ourselves on mitigating risks, building strong client relationships, and
                        driving innovation. Your financial success is our top priority.</p>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="section__footer container text-left">
                <p> <a class=" btn btn--primary btn--green " data-type="trackEvent" data-category="" data-action="" data-label="Get in touch" data-value="" href="{{url('/get-in-touch')}}" title="Get in touch"> Get in touch
                    </a>
                </p>
            </div>
        </div>
        <div class="bg-shape quater-border-filled bottom right size-96">
            <div class="bg-shape__inner animation-rotateLeft90" data-animation-offset="100%"> </div>
        </div>
        <div class=" bg-shape quater-filled top left  size-120  ">
            <div class="bg-shape__inner animation-rotateLeft90" data-animation-offset="100%"> </div>
        </div>
    </header>
    <section class="section ">
        <div class="grid grid--3-columns">
            <div class="grid__col padding-xl-96 relative bg-purple">
                <div class="grid__col-content content ">
                    <h2 class="headline-2 mb-0em"> The value we offer to you </h2>
                </div>
            </div>
            <div class="grid__col padding-xl-72 bg-darkOffWhite relative">
                <div class="grid__col-content content ">
                    <h2 class="headline-4 mb-10em"> Experience real financial improvements through our expertise and innovative
                        solutions.
                    </h2>
                </div>
            </div>
            <div class="grid__col padding-xl-72 bg-lightOffWhite relative">
                <div class="grid__col-content content ">
                    <h2 class="headline-4 mb-10em">Dedicated account managers shape your financial success.
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="section ">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-xl-4 padding-xl-72 bg-darkOffWhite">
                    <div class="content ">
                        <h2 class="headline-4 mb-10em">We offer diverse financial strategies as a privately owned firm.
                        </h2>
                    </div>
                </div>
                <div class="col-xl-4 padding-xl-72 bg-lightOffWhite">
                    <div class="content ">
                        <h2 class="headline-4 mb-10em"> solve financial challenges and modernize processes. </h2>
                    </div>
                </div>
                <div class="col-xl-4 padding-xl-72 bg-darkOffWhite">
                    <div class="content ">
                        <h2 class="headline-4 mb-10em"> We simplify your path to financial goals. </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="bg-blue2">
            <div class="container text-center">
                <h2 class="headline-2 pt-15em pb-15em mb-0em mt-0em"> Four Service Areas. Unlimited Possibilities. </h2>
            </div>
        </div>
        <div class="bg-blue">
            <div class="container ">
                <div class="link-block-wrapper">
                    @foreach($departments as $department)
                    <a href="{{url('/our-services')}}/{{$department->slug}}" title="CX &amp; Customer Engagement" class="link-block link-block--medium link-hover">
                        <span class="link-block__text link-hover__text"> {{$department->name}} </span>
                        <svg class="link-block__icon" width="48" height="57" aria-hidden="true">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" href="/web/images/icons.svg#icon-arrow"> </use>
                        </svg>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-xl-6 padding-xl-240 align-center">
                    <div class="relative zindex-3">
                        <h2 class="headline-3"> Contact Us </h2>
                        <div class="content  mb-30em">
                            <p><span>If you have any questions or would like more information, please use the contact form.</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 padding-xl-96 bg-lightOffWhite">
                    <div class=" form form--card bg-purple max-width-720 form-wrapper-18 " style="padding: 1.5rem;">
                        <div class="relative zindex-3">
                            <h2 class="headline-3 mb-5em js-form-headline"> Send a message </h2>
                            <div class="content mb-10em js-form-content">
                                <p> We aim to respond to all enquiries within 72 hours. </p>
                            </div>
                            <div id="hubspotform-18"></div>
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

                            <div class="form-wrapper-18">
                                <div class="js-form-content">
                                    <form id="custom-form" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" novalidate action="your-action-url">
                                        <label for="firstname">First Name *</label>
                                        <input type="text" id="firstname" name="firstname" required>

                                        <label for="lastname">Last Name *</label>
                                        <input type="text" id="lastname" name="lastname" required>

                                        <label for="email">Email *</label>
                                        <input type="email" id="email" name="email" required>

                                        <label for="phone">Phone Number *</label>
                                        <input type="tel" id="phone" name="phone" required>

                                        <label for="company">Company Name</label>
                                        <input type="text" id="company" name="company">

                                        <label for="message">Message/Question</label>
                                        <textarea id="message" name="message"></textarea>

                                        <div id="privacy-policy">
                                            <label for="privacy-policy">By submitting this form, you consent to our <a href="../privacy-policy-url" target="_blank">privacy policy</a>.</label>
                                        </div>

                                        <button type="submit" style="font-weight: 600;">Submit Details</button>
                                    </form>
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
    </section>
    <section class="section bg-gradient">
        <div class="content">
            <div class="container text-center">
                <h2 class="headline-2 mb-10em "> We only partner with the best </h2>
            </div>
        </div>
        <div class="container-fluid mt-25em js-marquee" data-speed="2" data-reverse="true" data-pausable="true">
            <div>@foreach($clients as $client)
                <div class="block block--small-rounded">
                    <figure class="block__picture"> <img class="block__image" src="/{{$client->logo}}" onerror="this.onerror=null;this.src='/assets/media/blankimg.svg'" width="252" height="109" alt="{{$client->imgAlt}}">
                    </figure>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>

@endsection

@section('scripts')
@endsection