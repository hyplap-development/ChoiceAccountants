@extends('layouts.web')

@section('title')
Choice Accountants Story & Process we follow | Choice Accountants
@endsection

@section('meta')
<meta name="description" content="Our Story Behind Choice-20 Years of Vision, Creativity & Expertise. Read More.">
<meta name="title" content="Our Expert Services | Choice Accountants Australia">
<meta name="keywords" content="">
<meta property="og:type" content="website"/>
<meta property="og:image" itemprop="image" content="https://choice.accountants/web/images/logo.webp"/>
<meta property="og:description" content="Our Story Behind Choice-20 Years of Vision, Creativity & Expertise. Read More.">
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
                <img class="frame__media" width="1920" height="2160" decoding="async" src="/web/images/abt.webp" alt="Certified Public Accountant - Our Story">
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
    @if($departments->count() > 0)
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
    @endif

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
                            <a href="tel:+61 2 8717 2200" class="link-block__link link-hover normal-text" title="Call Sales">
                                <span class="link-hover__text"> +61 2 8717 2200 </span> </a>
                        </div>
                        <div class="link-block link-block--contact">
                            <div class="d-flex align-items-center justify-content-start gap-2">
                                <i class="fa-solid fa-phone fs-10px iconstyle"></i> <span class="link-block__label small-text Fw-500 p-0"> Support </span>
                            </div>
                            <a href="tel:+61 2 8717 2200" class="link-block__link link-hover normal-text">
                                <span class="link-hover__text"> +61 2 8717 2200 </span> </a>
                        </div>
                        <div class="link-block link-block--contact">
                            <div class="d-flex align-items-center justify-content-start gap-2">
                                <i class="fa-solid fa-envelope fs-10px iconstyle"></i> <span class="link-block__label small-text Fw-500 p-0"> Email </span>
                            </div>
                            <a href="mailto:enquiry@choice.accountants" class="link-block__link link-hover normal-text" title="Email us">
                                <span class="link-hover__text">enquiry@choice.accountants
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
                                    <option value="">Select Service</option>
                                    @foreach($allservices as $allservice)
                                    <option value="{{$allservice->id}}">{{$allservice->name}}</option>
                                    @endforeach
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
                                    <a href="tel:+61 2 8717 2200" type="button" class="btn btn--secondary btn--purple mt-10em">Call Now</a>
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
    @if($clients->count() > 0)
    <section class="section bg-gradient">
        <div class="content">
            <div class="container text-center">
                <h2 class="headline-2 mb-10em"> We only partner with the best </h2>
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