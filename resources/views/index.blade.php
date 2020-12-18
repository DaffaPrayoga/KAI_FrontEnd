@section('head')
    @include('components.head')
@show
<body class="roboto" style="background-color: #f9f9f9;overflow-y: hidden">
<div class="row">
    <div class="col l6 m6 s12 hide-on-small-only">
        <div class="white sliding-section" style="height: 100vh;">
            <div class="container">
                <div class="owl-carousel" style="padding-top: 140px;">
                    <div class="item">
                        <img src="{{asset('img/org_chart_login.svg')}}" style="height: 250px;" alt="">
                        <p class="grey-text text-darken-4 center roboto-bold"
                           style="letter-spacing: 1px;font-size: 17px;margin-top: 40px;">
                            Succession Org. Chart</p>
                        <p class="grey-text text-darken-1 center"
                           style="letter-spacing: 1px;font-size: 14px;margin-top: 10px;">
                            Each worker is listed by chart which displays the name of the worker, title, talent
                            information, and it's successors</p>
                    </div>
                    <div class="item">
                        <img src="{{asset('img/family_tree_login.svg')}}" style="height: 250px;" alt="">
                        <p class="grey-text text-darken-4 center roboto-bold"
                           style="letter-spacing: 1px;font-size: 17px;margin-top: 40px;">
                            Family Tree</p>
                        <p class="grey-text text-darken-1 center"
                           style="letter-spacing: 1px;font-size: 14px;margin-top: 10px;">
                            Every colleague in the Family Tree shows
                            readiness in color, number of nominations and
                            successor in his position</p>
                    </div>
                    <div class="item">
                        <img src="{{asset('img/9_box_login.svg')}}" style="height: 250px;" alt="">
                        <p class="grey-text text-darken-4 center roboto-bold"
                           style="letter-spacing: 1px;font-size: 17px;margin-top: 40px;">
                            9 Box</p>
                        <p class="grey-text text-darken-1 center"
                           style="letter-spacing: 1px;font-size: 14px;margin-top: 10px;">
                            To help managers identify the best talent and decide what action to take with a variety of employees.</p>
                    </div>
                    <div class="item">
                        <img src="{{asset('img/report_login.svg')}}" style="height: 250px;" alt="">
                        <p class="grey-text text-darken-4 center roboto-bold"
                           style="letter-spacing: 1px;font-size: 17px;margin-top: 40px;">
                            Report</p>
                        <p class="grey-text text-darken-1 center"
                           style="letter-spacing: 1px;font-size: 14px;margin-top: 10px;">
                            Create reports from anywhere and anytime with the haer succession report feature</p>
                    </div>
                </div>
                <div class="center">
                    <a href="#prev"
                       class="waves-effect waves-accent grey lighten-3 z-depth-0 btn-floating customPrevBtn"
                       style="margin-top: 40px;font-size: 13px;border-radius: 8px;"><i
                            class="material-icons grey-text text-darken-3">keyboard_arrow_left</i></a>
                    <a href="#next"
                       class="waves-effect waves-accent grey lighten-3 z-depth-0 btn-floating customNextBtn"
                       style="margin-top: 40px;font-size: 13px;border-radius: 8px;"><i
                            class="material-icons grey-text text-darken-3">keyboard_arrow_right</i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col l6 m6 s12">
        <div class="container">
            <div class="card z-depth-0" style="border-radius: 16px;margin-top: 80px;">
                <div class="card-content">
                    <div class="container">
                        <div class="center">
                            <img src="{{asset('img/logo.svg')}}" style="height: 50px;margin-top: 30px" alt="">
                        </div>
                        <p class="grey-text text-darken-4 center roboto-bold"
                           style="letter-spacing: 1px;font-size: 20px;margin-top: 20px;">
                            LOGIN</p>
                        <input id="email" type="email" placeholder="Email Address"
                               class="validate"
                               style="border:1px solid #ddd;font-size: 15px;border-radius: 8px;padding-left: 5%;width: 95%;margin-top: 30px;">
                        <input id="password" type="password" placeholder="Password"
                               class="validate"
                               style="border:1px solid #ddd;font-size: 15px;border-radius: 8px;padding-left: 5%;width: 95%;margin-top: 10px;">
                        <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"
                             style="margin-top: 10px"></div>
                        <div class="center">
                            <a href="{{url('/org_chart')}}"
                               class="btn waves-effect waves-light accent-color-background-2 white-text z-depth-0"
                               style="width: 100%;margin-top: 40px;font-size: 13px;border-radius: 8px;padding-top: 20px;padding-bottom: 20px;line-height: 0px">LOGIN</a>
                        </div>
                        <div class="center" style="padding-top: 40px;padding-bottom: 20px;">
                            <a href="#" class="accent-color-2" style="font-size: 13px;letter-spacing: 0.5px;">Forget
                                Password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@section('js')
    @include('components.js')
@show
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script type="text/javascript">
    $(document).ready(function () {
        var owl = $('.owl-carousel').owlCarousel({
            loop: true,
            autoplay: 1000,
            margin: 10,
            dots: true,
            dotsEach: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
        // Go to the next item
        $('.customNextBtn').click(function () {
            owl.trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('.customPrevBtn').click(function () {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl.trigger('prev.owl.carousel');
        })
    });

</script>
</body>
</html>

