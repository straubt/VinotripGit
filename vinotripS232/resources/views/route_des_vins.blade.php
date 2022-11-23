<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" >
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel="stylesheet">
    <link rel="stylesheet" href="css/styleGeneral.css">    
    <link rel="stylesheet" href="css/over_image.css">
    <link rel="stylesheet" href="css/carte.css">
</head>
<header>
<a href="/" title="Vinotrip">
        <img id="logoSlogan" src="images/logo + slogan vinotrip.PNG">
    </a>
</header>

<body> 
    <h1>Route des Vins</h1>
    <img id="carte" src="images/carte.png">
    <?php for ($i = 1; $i<count($route_des_vins)-1; $i++) {?>
    <div class="parent"><a class="route_a" href="{{$route_des_vins[$i]['url_photo_route_des_vins']}}"> 
        <img class="localisation" src="images/localisation.png">
        <div class="parent"><div class = "container" ><img src="{{$route_des_vins[$i]['url_photo_route_des_vins']}}" alt="" class="image"><div class = "overlay"><div class = "texte">{{$route_des_vins[$i]['libelle_route_des_vins']}}<br>{{$route_des_vins[$i]['description_route_des_vins']}}</div></div></div></div>
        </a>
    </div>
    <?php } ?>

    
</body>
</html>