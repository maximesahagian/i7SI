<section class="contact ">
<div class="scrollme">
    <div class="animateme"
         data-when="enter"
         data-from="0"
         data-to="1"
         data-easing="easeinout"
         data-translatex="150">
        <h2 class="title">{{$title}}</h2>

    </div>
</div>

    <input type="text" required placeholder="Nom" name="nom" id="nom_contact">
    <input type="text" required placeholder="Prénom" name="prenom" id="prenom_contact">

    <br><br>
    <input type="email" required placeholder="Email" name="email" id="email_contact">
    <input type="text" id="objet_contact" placeholder="Objet du message">
    <textarea name="message" id="message_contact" cols="30" rows="10" placeholder="Votre message"></textarea>
    <div class="info-submit"><p>Envoi en cours… l’envoi de votre message peut durer quelques instants</p></div>
    <input type="submit" id="submit_contact" value="{{$cta}}">

    <script>
        function sendMessage(){
            $.ajax({
                url: "/addmessage",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    firstname : $('#prenom_contact').val(),
                    lastname : $('#nom_contact').val(),
                    email : $('#email_contact').val(),
                    object : $('#objet_contact').val(),
                    message : $('#message_contact').val()
                },
                dataType: "html"
            }).then(function(){
                $('.info-submit').addClass('success');
                $('.info-submit p').text('Votre message à bien été envoyé, vous recevrez une réponse par mail dans les plus bref délais');
                if($('.info-submit').hasClass("warning")){
                    $('.info-submit').removeClass("warning");
                }
            })
                .fail(function(){
                    localStorage.setItem("messages", (parseInt(localStorage.getItem("messages"))-1));
                    $('.info-submit').addClass('warning');
                    $('.info-submit p').text('Une erreur est apparue, merci de remplir les champs correctement.');
                });
        }

        $('#submit_contact').click(function(){
            $('.info-submit').addClass('active');
            if($('.info-submit').hasClass('warning')){
                $('.info-submit').removeClass('warning');
            }
            if($('.info-submit').hasClass('success')){
                $('.info-submit').removeClass('success');
            }
            if(localStorage.getItem("messages") == null){
                localStorage.setItem("messages", 1)
                sendMessage();
            }
            else{
                if(localStorage.getItem("messages") == 3){
                    $('.info-submit').addClass('warning');
                    $('.info-submit p').text('Oups… Vous avez déjà envoyé 3 messages..');
                }
                else{
                    localStorage.setItem("messages", (parseInt(localStorage.getItem("messages"))+1));
                    sendMessage();
                }
            }
        })
    </script>
</section>