@extends('layouts.web')

@section('title')
Valuable Clients of Choice Accountants | Australia
@endsection

@section('meta')
@show

@section('style')
@endsection

@section('content')
<header class="l-header">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class=" col-xl-8 padding-xl-120-180 bg-purple ">
                <div class=" content  zindex-3 relative ">
                    <p class="preheadline mt-0em mb-15em"> Our Valuable Clients </p>
                    <h1 class="headline-2 mb-0em"> We Work with everyone and help them to become the Best </h1>
                </div>
                <div class=" bg-shape quater-border-filled top left gradient-2 size-120  ">
                    <div class="bg-shape__inner animation-rotateLeft90" data-animation-offset="100%"> </div>
                </div>
                <div class=" bg-shape quater-border-double top right color-white size-96  ">
                    <div class="bg-shape__inner animation-rotateLeft90" data-animation-offset="100%"> </div>
                </div>
            </div>
            <div class=" col-xl-4 d-none d-xl-block padding-xl bg-purple2 ">
                <div class=" bg-shape quater-filled bottom right gradient-1 size-360  ">
                    <div class="bg-shape__inner animation-rotateLeft90" data-animation-offset="100%"> </div>
                </div>
                <div class=" bg-shape quater-border-filled top left gradient-1 size-96  ">
                    <div class="bg-shape__inner animation-rotateLeft90" data-animation-offset="100%"> </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <div class=" section bg-darkOffWhite">
        <div class="container ">
            <div class="grid grid--3-columns-gapped">
                @foreach($clients as $client)
                <a class="grid__col card card--logo">
                    <figure class="card__image-wrap"> <img class="card__image" src="/{{$client->logo}}" onerror="this.onerror=null;this.src='/assets/media/blankimg.svg'" width="200" height="200" alt="{{$client->imgAlt}}">
                    </figure>
                </a>
                @endforeach
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-xl-6 padding-xl-240 align-center">
                    <div class="relative zindex-3">
                        <h2 class="headline-3"> At Choice Accountants, our team of experts is poised and ready to take on your
                            next financial
                            challenge. </h2>
                        <div class="content  mb-30em">
                            <p> Contact us today to initiate the process! We're eager to arrange a discovery workshop,
                                where we'll thoroughly delve into your business project or issue, ensuring we provide you with the
                                best possible solutions.
                            </p>
                        </div>
                    </div>
                    <div class="bg-shape-container zindex-1">
                        <div class=" bg-shape quater-filled top left  size-300  ">
                            <div class="bg-shape__inner animation-rotateLeft90" data-animation-offset="100%"> </div>
                        </div>
                        <div class=" bg-shape quater-border-filled top right gradient-1 size-96  ">
                            <div class="bg-shape__inner animation-rotateLeft90" data-animation-offset="100%"> </div>
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
</main>
@endsection

@section('scripts')
@endsection