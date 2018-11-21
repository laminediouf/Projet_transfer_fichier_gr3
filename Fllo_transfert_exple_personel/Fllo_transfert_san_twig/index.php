<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="Bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="Bootstrap/css/stylee.css" />
    <title>Document</title>
</head>
<body>


<section id="contact">
    <div class="contain">
        <img src="images/logo.png" style="position:absolute;top:10px;widht:100px;height:100px;left:50px;">
        <a href="#accueil">A Propos</a>
    </div>

    <div class="section-content">
        <h1 class="section-header">F.L.L.O Transfer <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Simple Rapide Efficace</span></h1>
        <h3>Pour vos Envoie de fichier Gratuitement Jusqu'a 15Go de Memoire et pouvant Envoyer des Fichiers de Taille 2Go </h3>
        <h3>N'attendez Plus Essayez !!!</h3>
    </div>
    <div class="contact-section">
        <div class="container">
            <form method="post" action="#">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail">Votre Email</label>
                        <input type="email" class="form-control" name="email_emetteur" id="email_emetteur" placeholder=" Votre Email">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Email Recepteur</label>
                        <input type="email" class="form-control" name="destinataire" id="destinataire" placeholder=" Email Recepteur">
                    </div>
                    <div class="form-group">
                        <label for ="description"> Message</label>
                        <textarea  class="form-control" id="message" name="message" placeholder="Votre Message"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group files">
                        <label>Importer votre Fichier </label>
                        <input type="file" class="form-control" multiple="" name="fichier" id="fichier">
                    </div>

                    <button type="button" class="btn btn-default submit" id="btnenvoie" name="submit"> <i class="fa fa-paper-plane" aria-hidden="true"></i> Envoyer Fichier </button>
                </div>
            </form>
        </div>
    </div>
</section>

<script src="Bootstrap/js/jquery.min.js"></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>