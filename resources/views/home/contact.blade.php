@extends('home.base')

@section('content')
    <div class="uk-section uk-padding-remove-vertical in-liquid-breadcrumb">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb"></ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb content end -->
    <main>
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-1-2 uk-text-center">
                        <h2 class="uk-margin-small-bottom">Do not hesitate to <span class="in-highlight">reach out.</span></h2>
                        <p class="uk-text-lead uk-text-muted uk-margin-remove">Just fill in the contact form here and we’ll be sure to reply as fast as possible</p>
                    </div>
                    <div class="uk-width-1-1 uk-margin-large-top">
                        <div class="uk-grid uk-grid-large uk-child-width-1-2" data-uk-grid>
                            <div>
                                <form action="#" method="get" class="uk-form uk-grid-small" data-uk-grid>
                                    <div class="uk-width-1-1">
                                        <input class="uk-input uk-border-rounded" id="name" name="name" type="text" placeholder="Full name">
                                    </div>
                                    <div class="uk-width-1-1">
                                        <input class="uk-input uk-border-rounded" id="email" name="email" type="email" placeholder="Email address">
                                    </div>
                                    <div class="uk-width-1-1">
                                        <input class="uk-input uk-border-rounded" id="subject" name="subject" type="text" placeholder="Subject">
                                    </div>
                                    <div class="uk-width-1-1">
                                        <textarea class="uk-textarea uk-border-rounded" id="message" name="msg" rows="6" placeholder="Message"></textarea>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <button class="uk-width-1-1 uk-button uk-button-primary uk-border-rounded" id="sendemail" type="submit" name="send">Send Message</button>
                                    </div>
                                </form>
                            </div>
                            <div>
                                <h4 class="uk-margin-remove-bottom">Get in tourch with us</h4>
                                <p class="uk-margin-small-top">Please submit using this</p>
                                <div class="uk-flex uk-flex-middle uk-margin">
                                    <div class="uk-margin-small-right">
                                        <i class="fas fa-envelope fa-sm in-icon-wrap circle small primary-color"></i>
                                    </div>
                                    <div>
                                        <p class="uk-margin-remove">{{$web->email}}</p>
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-middle uk-margin">
                                    <div class="uk-margin-small-right">
                                        <i class="fas fa-phone fa-sm in-icon-wrap circle small primary-color"></i>
                                    </div>
                                    <div>
                                        <p class="uk-margin-remove">{{$web->phone}}</p>
                                    </div>
                                </div>
                                <hr class="uk-margin-medium">
                                <h4 class="uk-margin-bottom">Our socials media</h4>
                                <a href="#" class="fab fa-telegram-plane fa-lg uk-margin-right"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>


@endsection
