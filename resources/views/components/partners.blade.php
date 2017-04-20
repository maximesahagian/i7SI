<section class="partners">
    <div class="container">
        <div class="slider">
            <div class="slidercarousel slidercarousel3">
<!--                <div class="arrow-left slick-prev"></div>
-->                <div class="image"><img src="/images/partenaire-1.png" alt=""></div>
                <div class="image"><img src="/images/partenaire-2.png" alt=""></div>
                <div class="image"><img src="/images/partenaire-3.png" alt=""></div>
                <div class="image"><img src="/images/partenaire-4.png" alt=""></div>
                <div class="image"><img src="/images/partenaire-2.png" alt=""></div>
                <div class="image"><img src="/images/partenaire-3.png" alt=""></div>
<!--                <div class="arrow-right slick-next"></div>
-->
            </div>
            <div class="dotsemplacement dotsemplacement2"></div>
        </div>
    </div>
</section>

<script>
    $('.slidercarousel3').slick({
        infinite: true,
        margin: '1px',
        slidesToShow: 3,
        accessibility: true,
        centermode:true,
        arrows: true,
        dots: false,
        vertical: false,
        draggable: true,
        verticalSwiping: false,
        appendDots: $('.dotsemplacement1'),
        prevArrow:"<img class='a-left control-c prev slick-prev' src='/images/arrow_left.png'>",
        nextArrow:"<img class='a-right control-c next slick-next' src='/images/arrow_right_carrou.png'>",
        responsive: [
            {
                breakpoint: 1024,
                settings: {}
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    verticalSwiping: false,
                    vertical: false,
                    slidesToShow: 1

                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $('.slidercarousel3').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        $('.slidercarousel3 .image').each(function(){
            if($(this).attr("data-slick-index") == "1"){
                $(this).css('border-left', 'none');
            }
        })
    });
</script>