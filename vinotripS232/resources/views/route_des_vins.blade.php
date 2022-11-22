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
    <a href="http://51.83.36.122:8232/" title="Vinotrip">
        <img id="logoSlogan" src="images/logo + slogan vinotrip.PNG">
    </a>
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