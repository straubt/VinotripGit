<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil vinotrip</title>
    <link rel="icon" type="image/x-icon" href="images/images.jpg">
    <link rel="stylesheet" href="css/styleGeneral.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/caroussel.css">
</head>
<body>
    <script>
        var data = <?php echo json_encode($sejour);?>;
    </script>
    <header> 
        <img id="logoSlogan" src="images/logo + slogan vinotrip.PNG">
        <button id="route_des_vins" onclick="location.href='route-des-vins'">Route des vins</button>
        <button id="registerButton" onclick="location.href='register'">S'inscrire</button>
    </header>

    <div id="slider">
            <ul id="slideWrap">
            </ul>
            <a id="prev" href="#">&#8810;</a>
            <a id="next" href="#">&#8811;</a>
        </div>
        <button id="buttonSlider" onclick="location.href='nos-sejours'">Découvrir nos séjours</button>
        <br>

        <section class="bandeau"> 
            <br>
            <p class="mentionl"> Nous utilisons des cookies et d'autres technologies qui sont indispensables pour vous fournir les 
                services et les fonctionnalités du site conformément à notre Avis sur les cookies. Si vous acceptez et cliquez sur 
                Tout accepter, nous autoriserons également des sociétés tierces partenaires à stocker des cookies sur votre appareil 
                et à utiliser des technologies similaires pour collecter et utiliser vos données personnelles (par exemple, l'adresse
                IP) à des fins de personnalisation des publicités, de mesure et d'analyse sur nos sites et en dehors. Vous pouvez 
                refuser votre consentement en cliquant sur Tout refuser ou faire des choix précis en sélectionnant Personnaliser 
                mes choix. Vous pouvez retirer votre consentement à tout moment sur la page https://nomDuSite.fr </p>  
            <br>
            <p class="ention"> Fins du traitement des données : stocker et/ou accéder à des informations sur un appareil. Publicités
                et contenu personnalisés, mesure de performance des publicités et du contenu, informations sur le public cible et
                développement de produits. </p> 
            <div id="boutons"> 
                <br>
                <button class="buttonBandeau" id="Accept">Accepter</button>
                <button class="buttonBandeau" id="Refus" onclick="togg()">Tout refuser</button> 
                <button class="buttonBandeau" id="Perso" input type="button" onclick="window.location.href = '../views/personalisationcookies.html';"/> Personnaliser mes choix
            </button> 
            </div> 
            
        </section> 
        <?php
    ?>

    <script src="../js/mainPageAcceuil.js"></script>
</body>

<footer>
        <div class="txtFooter">
            <a href="" title="page d'accueil">
                Page d'Acceuil
            </a>
            <a href="../mention legales/mention legales.html" title="Mentions legales">
                Mentions legales
            </a>
            <a href="" title="Politique de Confidentialité">
                Politique de Confidentialité
            </a>
        </div>
        
        <div id="txtPayementSecu">Payement securisé :
            <br><img id="payementSecu" src="images/Paiement-Securise.png" title="Paiement sécurisé">
        </div>
</footer>
<script src="js/caroussel.js"></script>
</html>