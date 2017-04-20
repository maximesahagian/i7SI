<header>
    <div class="logo">
        <img src="/images/logo_header.png" alt="">
    </div>
    <ul class="menu">
        <li><img src="/images/logo_header.png" alt="Logo"></li>
        <li class="active"><a href="#">accueil</a></li>
        <li><a href="#">à propos</a></li>
        <li><a href="#">savoir faire</a></li>
        <li><a href="#">chiffres clés</a></li>
        <li><a href="#">partenaires</a></li>
        <li class="last"><a href="#">contact</a></li>
    </ul>

    <div class="burger">
        <div class="line"></div>
    </div>

</header>

<script>
    $('.burger').click(function () {
        if($('.line').hasClass('active') == false){
            $('.menu').show();
            $('.menu img').show();
            $('.line').addClass('active')
            console.log($('.line').hasClass('active'))
        }else{
            $('.menu').hide();
            $('.menu img').hide();
            $('.line').removeClass('active')
            console.log($('.line').hasClass('active'))
        }



    })
</script>