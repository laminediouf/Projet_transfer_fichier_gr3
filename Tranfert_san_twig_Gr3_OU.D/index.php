<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="public/css/styl.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="conteneur">

    <div>
        <div class=" col-xs-6 log"><img src="public/img/LOGO_acs_group3.png" width="70" ></div>
        <div col-xs-6>
            <a href=".section">
                <span data-text="F">A</span>
                <span data-text=".">.</span>
                <span data-text="L">B</span>
                <span data-text=".">O</span>
                <span data-text="L">U</span>
                <span data-text=".">T</span>
                <span data-text="O">.</span>
                <span data-text=".">.</span>

            </a>
            <div class="section1">
                <p>
                    F.L.L.O est un servive de transfert de données en toutes sécurité.
                </p>
            </div>
        </div>
    </div>
    <div>
        <section id="contact">
            <div class="section-content">
                <h1 class="section-header">F.L.L.O<span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Transfert</span></h1>
                <h3> F.L.L.O est un servive de transfert de données en toutes sécurité.</h3>
            </div>
            <div class="contact-section">
                <div class="container">
                    <form action="submit.php" method="post" enctype="multipart/form-data">
                        <div class="col-md-6 form-line">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputfile">File</label>
                                    <input type="file" class="form-control" id="file" name="fichier"  placeholder=" choisiers vos fichiers">
                                </div>
                                <label for="destinatiare">Email Destiantaire</label>
                                <input type="text" class="form-control" name="destinataire" id="destinatiare" placeholder=" Email Destinataire">
                            </div>
                            <div class="form-group">
                                <label for="Email_Emetteur">Votre Email</label>
                                <input type="email" class="form-control" id="Email_Emetteur" name="email_emetteur" placeholder="Votre email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for ="description"> Message</label>
                                <textarea  class="form-control" style="height:123px" id="description" name="message" placeholder="Enter Your Message"></textarea>
                            </div>
                            <div>

                                <button type="submit" name="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Envoyer</button>
                            </div>

                        </div>
                    </form>
                </div>
        </section>
    </div>
</div>
<script src="public/js/jquery-3.3.1.min.js"></script>
<script src="public/js/jscrip.js"></script>
<script src="public/js/bootstrap.min.js"></script>
</body>
</html>

<style>
body
{
    background-image: url('public/img/oum.jpg');
}
</style>