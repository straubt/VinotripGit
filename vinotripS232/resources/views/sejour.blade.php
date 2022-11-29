<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel="stylesheet">

    <link rel="stylesheet" href="css/styleGeneral.css"></head>
    <header> 
    <a href="/"><img id="logoSlogan" src="images/logo + slogan vinotrip.PNG"></a>
        <button id="route_des_vins" onclick="location.href='route-des-vins'">Route des vins</button>
       @guest <button id="loginButton" onclick="location.href='login'">Se Connecter</button>
        <button id="registerButton" onclick="location.href='register'">S'inscrire</button> @endguest
        @auth <button id="registerButton" onclick="location.href='logout'">Se déconnecter</button> @endauth
    </header>
<body> 
<div>
<img src="{{$sejour[$_SERVER['QUERY_STRING']-1]['photo_sejour']}}" alt="">
</div>
<div>
    <?php 
    $id = $_SERVER['QUERY_STRING']-1; 
    $idexist = "";
    $commentaire = "";
    if(isset($avis[$sejour[$id]['id_sejour']-1]['note_avis']))
    {
        $idexist = $avis[$sejour[$id]['id_sejour']-1]['note_avis']/5;
        $commentaire = $avis[$sejour[$id]['id_sejour']-1]['libelle_avis'];
    }
    else
    {
        $idexist = "Aucun avis n'a été publié pour l'instant";
        $commentaire = "Aucun commenstaire n'a été publié pour l'instant";
    }
    ?>
    <h1>{{$sejour[$id]['titre_sejour']}}</h1>
    <p>Durée : {{$sejour[$id]['duree_sejour']}} jours, {{$sejour[$id]['duree_sejour']-1}} nuits</p>
    <p>{{$sejour[$_SERVER['QUERY_STRING']-1]['description_sejour']}}</p>
    <p>{{$theme[$sejour[$id]['id_theme']-1]['libelle_theme']}}</p>
    <p>Avis = {{$idexist}}</p>
    <p>Commentaire = {{$commentaire}}</p>
    <button class = "ajtPanier">Ajouter au panier</button>

</div>

</body>
</html>