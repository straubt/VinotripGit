<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="css/styleGeneral.css" >
</head>
<header>
    <a href="http://51.83.36.122:8232/" title="Vinotrip">
        <img id="logoSlogan" src="images/logo + slogan vinotrip.PNG">
    </a>
</header>

<body> 
    @foreach ($route_des_vins as $uneRoute)
    <div class="route_des_vins"><a class="route_a" href="{{$uneRoute['url_photo_route_des_vins']}}"> 
        <h1>{{$uneRoute['libelle_route_des_vins']}}</h1>
        <img src="{{$uneRoute['url_photo_route_des_vins']}}" id="image_route_vins">
        <h2 id="text_route">{{$uneRoute['description_route_des_vins']}}</h2>
</a>
</div>
    @endforeach

    
</body>
</html>