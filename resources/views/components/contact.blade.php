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
                console.log("hey")
            });
        }

        $('#submit_contact').click(function(){
            if(localStorage.getItem("messages") == null){
                localStorage.setItem("messages", 1)
                sendMessage();
            }
            else{
                if(localStorage.getItem("messages") == 3){
                    console.log("Vous avez déjà envoyé 3 messages.");
                }
                else{
                    localStorage.setItem("messages", (parseInt(localStorage.getItem("messages"))+1));
                    sendMessage();
                }
            }
        })
    </script>
</section>