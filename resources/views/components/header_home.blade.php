<header>
    <div class="logo">
        <img src="/images/logo_header.png" alt="">
    </div>
    <ul class="menu">
        <li class="active"><a href="#">accueil</a></li>
        <li divto="group"><a href="#">à propos</a></li>
        <li divto="expertise-content.desktop"><a href="#">services</a></li>
        <li divto="title-key"><a href="#">chiffres clés</a></li>
        <li divto="partners"><a href="#">partenaires</a></li>
        <li divto="contact"><a href="#">contact</a></li>
    </ul>

    <div class="burger">
        <div class="line"></div>
    </div>

</header>

<script>
    $('.burger').click(function () {
        $('.menu').show();
        //$('.line:before').css({transform: "rotate(-65deg)"})
        $('.line').css({background: "red"})
    })

    $('.menu li').click(function(){
        $('html, body').animate({
            scrollTop: $("."+$(this).attr('divto')).offset().top
        }, 1000);
    });
</script>