<section class="banner-home" style="background-image: url('/images/{{$image}}');">
    <div class="banner-container">
        <div class="banner-content">
            <h2>{{$title}}</h2>
            <p>{{$paragraph}}</p>
            <div divto="group" class="discover">
                <div class="arrow-right"></div>
                <span>{{$cta}}</span>
            </div>
        </div>
    </div>
</section>

<script>
    $('.discover').click(function(){

            $('html, body').animate({
                scrollTop: $("."+$(this).attr('divto')).offset().top
            }, 1000);
    });
</script>