@extends('layouts.web')

@section('title')
Choice Accountant Contact Details | Australia
@endsection

@section('meta')
@show

@section('style')
@endsection


@section('content')

<header class="l-header l-header--full-height">
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
                    <div class="grid grid--50-50-gapped mt-20em">
                        <div class="link-block link-block--contact">
                            <span class="link-block__label small-text"> Sales </span>
                            <a href="tel:+61 2 8717 2222" class="link-block__link link-hover normal-text" title="Call Sales">
                                <svg class="link-block__icon fill-pink" aria-hidden="true" width="20" height="20">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" href="../choiceaccountant/images/icons.svg#icon-phone"> </use>
                                </svg> <span class="link-hover__text"> +61 2 8717 2222 </span>
                            </a>
                        </div>
                        <div class="link-block link-block--contact">
                            <span class="link-block__label small-text"> Support </span>
                            <a href="tel:+61 2 8717 2222" class="link-block__link link-hover normal-text">
                                <svg class="link-block__icon fill-pink" aria-hidden="true" width="20" height="20">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" href="../choiceaccountant/images/icons.svg#icon-phone"> </use>
                                </svg> <span class="link-hover__text"> +61 2 8717 2222 </span>
                            </a>
                        </div>
                        <div class="link-block link-block--contact">
                            <a href="mailto:help@choice.in" class="link-block__link link-hover normal-text" title="Email us">
                                <svg class="link-block__icon fill-pink" aria-hidden="true" width="20" height="12">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" href="../choiceaccountant/images/icons.svg#icon-email"> </use>
                                </svg>
                                <span class="link-hover__text">help@choice.in</span>
                            </a>
                        </div>
                        <div class="link-block link-block--contact">
                            <a href="index.html" class="link-block__link link-hover normal-text" title="Open the chat">
                                <svg class="link-block__icon fill-pink" aria-hidden="true" width="20" height="20">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" href="../choiceaccountant/images/icons.svg#icon-live-chat"> </use>
                                </svg> <span class="link-hover__text"> Live Chat </span>
                            </a>
                        </div>
                        <div class="link-block link-block--contact">
                            <a href="" class="link-block__link link-hover normal-text" target="_blank" title="CZone Portal">
                                <svg class="link-block__icon fill-pink" aria-hidden="true" width="20" height="20">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" href="../choiceaccountant/images/icons.svg#icon-czone"> </use>
                                </svg> <span class="link-hover__text"> MYOB Login </span>
                            </a>
                        </div>
                    </div>
                    <ul class="social-media">
                        <li class="social-media__item"> 
                            <a class="social-media__link" href="" target="_blank" title="Our LinkedIn"> 
                                <svg width="36" height="36">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" href="../choiceaccountant/images/icons.svg#icon-social-linkedin"> </use>
                                </svg> 
                            </a> 
                        </li>
                        <li class="social-media__item"> 
                            <a class="social-media__link" href="https://twitter.com/choice.accountants" target="_blank" title="Our Twitter"> 
                                <svg width="36" height="36">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" href="../choiceaccountant/images/icons.svg#icon-social-twitter"> </use>
                                </svg> 
                            </a> 
                        </li>
                        <li class="social-media__item"> 
                            <a class="social-media__link" href="" target="_blank" title="Our YouTube">
                                <svg width="36" height="36">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" href="../choiceaccountant/images/icons.svg#icon-social-youtube"> </use>
                                </svg> 
                            </a> 
                        </li>
                    </ul>
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
</header>

@endsection

@section('scripts')
@endsection