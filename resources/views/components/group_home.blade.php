<section class="group ">
    <div class="scrollme">
        <div class="animateme"
             data-when="enter"
             data-from="0.5"
             data-to="0"
             data-opacity="0"
             data-translatex="-2200"
        >
            <h2 class="title-group ">{{$title}}</h2>
        </div>
    </div>
    <div class="history">
        <div class="history-background">
            <div class="history-background-image" style="background-image: url('/images/{{$history_image}}')">
                <div class="scrollme">
                    <div class="history-content animateme"
                         data-when="exit"
                         data-from="0"
                         data-to="1"
                         data-easing="easeinout"
                         data-translatey="-130">
                        <h4 class="history-title">{{$our_history_title}}</h4>
                        <p class="history-text">{{$our_history_paragraph}}</p>
                        <div divto="title-key" class="learn-more scroll-button">
                            <div class="arrow-right"></div>
                            <span>{{$our_history_cta}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scrollme scrollme-mobile">
            <div class="history-content">
                <h4 class="history-title">{{$our_history_title}}</h4>
                <p class="history-text">{{$our_history_paragraph}}</p>
                <div divto="title-key" class="learn-more scroll-button">
                    <div class="arrow-right"></div>
                    <span>{{$our_history_cta}}</span>
                </div>
            </div>
        </div>
    </div>


    <div class="expertise-content phone ">
        <div class="expertise">

            <div class="our-expertise">
                <div class="expertise-text-container">
                    <div class="top">
                        <h3>Notre savoir faire </h3>
                        <div class="expertise-pagination-container">
                            <h4>
                                01
                            </h4>
                            <hr class="pagination-hr">
                            <h5>
                                03
                            </h5>
                        </div>
                    </div>
                    <div class="bottom bottom1">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur.</p>
                    </div>


                </div>

            </div>
            <div class="slider">
                <div class="slidercarousel slidercarousel2">
                    <div class="image"><img src="/images/slider_1.jpg" alt=""></div>
                    <div class="image"><img src="/images/slider_1.jpg" alt=""></div>
                    <div class="image"><img src="/images/slider_1.jpg" alt=""></div>
                </div>
                <div class="dotsemplacement dotsemplacement2"></div>
            </div>
        </div>
    </div>
    <div class="expertise-content desktop">
        <div class="expertise">
            <div class="slider">

                <div class="slidercarousel slidercarousel1">
                    <div class="image" style="background-image: url('/images/{{$slider_1_image}}');    height: 494px; background-size: cover;"></div>
                    <div class="image" style="background-image: url('/images/{{$slider_2_image}}');    height: 494px; background-size: cover;"></div>
                    <div class="image" style="background-image: url('/images/{{$slider_3_image}}');    height: 494px; background-size: cover;"></div>
                </div>
                <div class="dotsemplacement dotsemplacement1"></div>
            </div>
            <div class="our-expertise">
                <div class="expertise-text-container">
                    <div class="top">
                        <h3>{{$expertise_title}}</h3>
                        <div class="expertise-pagination-container">
                            <h4>
                                01
                            </h4>
                            <hr class="pagination-hr">
                            <h5>
                                03
                            </h5>
                        </div>
                    </div>
                    <div class="bottom">
                        <p>{{$expertise_paragraph_1}}</p>
                    </div>

                    <span class="paragraph-1"
                          style="display:none">{{$expertise_paragraph_1}}</span>

                    <span class="paragraph-2"
                          style="display:none">{{$expertise_paragraph_2}}</span>

                    <span class="paragraph-3"
                          style="display:none">{{$expertise_paragraph_3}}</span>

                </div>

            </div>
        </div>
    </div>

</section>

<script>
        $('.slidercarousel1').slick({
            infinite: true,
            slidesToShow: 1,
            accessibility: true,
            arrows: false,
            dots: true,
            vertical: true,
            draggable: true,
            verticalSwiping: true,
            appendDots: $('.dotsemplacement1'),
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {}
                },
                {
                    breakpoint: 600,
                    settings: {}
                },
                {
                    breakpoint: 480,
                    settings: {
                        verticalSwiping: false,
                        vertical: false


                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        $('.slidercarousel2').slick({
            infinite: true,
            slidesToShow: 1,
            accessibility: true,
            arrows: false,
            dots: true,
            vertical: true,
            draggable: true,
            verticalSwiping: true,
            appendDots: $('.dotsemplacement2'),
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {}
                },
                {
                    breakpoint: 600,
                    settings: {}
                },
                {
                    breakpoint: 480,
                    settings: {
                        verticalSwiping: true,
                        slidesToShow: 3,

                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });


        var textArray = [$('.paragraph-1').text(), $('.paragraph-2').text(), $('.paragraph-3').text()];
        $('.slidercarousel1').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
            $('.bottom p').text(textArray[nextSlide]).animate('slow');
            var realNumber = nextSlide + 1;
            $('.expertise-pagination-container h4').text('0' + realNumber);
        });
        $('.slidercarousel2').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
            $('.bottom p').text(textArray[nextSlide]).animate('slow');
            var realNumber = nextSlide + 1;
            $('.expertise-pagination-container h4').text('0' + realNumber);
        });

        $('.scroll-button').click(function(){
            if ($(this).attr('divto') != null) {
                $('html, body').animate({
                    scrollTop: $("."+$(this).attr('divto')).offset().top
                }, 1000);
            }
        });
</script>
