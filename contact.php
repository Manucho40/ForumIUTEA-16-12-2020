<?php 
session_start();
include_once "fonction/contact.php";
require_once "fonction/bdd.php";
$bdd = bdd();

if (!empty($_POST)) {
    $erreurs = contact();
}

 ?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Infoprog - Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,300,700">
    <link rel="stylesheet" href="maine.css">
    <script src="jquery-3.5.1.min.js"></script>
</head>
<body>
    <?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Contactez-moi !</h1>
            </div>
        </div>
        <form method="post" action="">
            <?php 
            if(isset($erreurs)):
                if ($erreurs) :
                    foreach ($erreurs as $erreur) :
                        
                    
             ?>
            <div class="row">
                <div class="col-xs-12">
                    <div class="message erreur"><?= $erreur ?></div>
                </div>
            </div>
            <?php 
                endforeach;
                else : 

             ?>
            <div class="row">
                <div class="col-xs-12">
                    <div class="message confirmation">Votre message a bien été envoyé !</div>
                </div>
            </div>

            <?php
                endif; 
                endif;

             ?>
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" name="nom" placeholder="Votre nom *" value="<?php  if(isset($_POST["nom"]))echo $_POST["nom"] ?>">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="email" placeholder="Votre adresse email *" value="<?php  if(isset($_POST["email"]))echo $_POST["email"] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <textarea name="texte" placeholder="En quoi puis-je vous aider ? *"><?php  if(isset($_POST["texte"]))echo $_POST["texte"] ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <input type="submit" value="Envoyer!">
                </div>
            </div>
        </form>
        
    </div><br><br><br><br><br>
    <?php  include ("footer.php");  ?>
</body>
</html>