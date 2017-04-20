<header>
    <div class="logo">
        <img src="/images/logo_header.png" alt="">
    </div>
    <ul class="menu">
        <li><img src="/images/logo_header.png" alt="Logo"></li>
        <li class="active"><a href="#">accueil</a></li>

        <li divto="group"><a href="#">à propos</a></li>
        <li divto="expertise-content.desktop"><a href="#">services</a></li>
        <li divto="title-key"><a href="#">chiffres clés</a></li>
        <li divto="partners"><a href="#">partenaires</a></li>
        <li divto="contact" class="last"><a href="#">contact</a></li>
    </ul>

    <div class="burger">
        <div class="line"></div>
    </div>

</header>

<script>
    $('.burger').click(function () {
        if($('.line').hasClass('active') == false){
            $('.menu').show();
            $('.line').addClass('active')
            console.log($('.line').hasClass('active'))
        }else{
            $('.menu').hide();
            $('.line').removeClass('active')
            console.log($('.line').hasClass('active'))
        }



    })

    $('.menu li').click(function(){

        if ($(this).attr('divto') != null) {
            $('html, body').animate({
                scrollTop: $("."+$(this).attr('divto')).offset().top
            }, 1000);
        }
    });
</script>