<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="css/styleGeneral.css" >
    <link rel="stylesheet" href="css/over_image.css">
</head>
<header> 
        <div id="headerButton">
            <button id="route_des_vins" onclick="location.href='route-des-vins'">Route des vins</button>
            <a href="/" title="Vinotrip">
                <img id="logoSlogan" src="images/logo + slogan vinotrip.PNG">
            </a>
            <button id="registerButton" onclick="location.href='register'">S'inscrire</button>
        </div>
</header>
<body> 
    @foreach ($route_des_vins as $uneRoute)
    <div class="parent"><a class="route_a" href="{{$uneRoute['url_photo_route_des_vins']}}"> 
        <div class="parent"><div class = "container" ><img src="{{$uneRoute['url_photo_route_des_vins']}}" alt="" class="image"><div class = "overlay"><div class = "texte">{{$uneRoute['libelle_route_des_vins']}}<br>{{$uneRoute['description_route_des_vins']}}</div></div></div></div>
        </a>
    </div>
    @endforeach

    
</body>
</html>