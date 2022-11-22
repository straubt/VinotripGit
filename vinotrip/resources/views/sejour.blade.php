<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
<div>
<img src="{{$sejour[$_SERVER['QUERY_STRING']-1]['photo_sejour']}}" alt="">
</div>
<div>
    <?php $id = $_SERVER['QUERY_STRING']-1; ?>
    <h1>{{$sejour[$id]['titre_sejour']}}</h1>
    <p>Durée : {{$sejour[$id]['duree_sejour']}} jours, {{$sejour[$id]['duree_sejour']-1}} nuits</p>
    <p>{{$sejour[$_SERVER['QUERY_STRING']-1]['description_sejour']}}</p>
    <p>{{$categorie_participant[$sejour[$id]['id_categorie_participant']-1]['lib_categorie_participant']}}</p>
    <p>{{$theme[$sejour[$id]['id_theme']-1]['libelle_theme']}}</p>
    <p> Avis : {{$avis[$sejour[$id]['id_sejour']-1]['note_avis']}}/5</p>
    <p>Commentaire : {{$avis[$sejour[$id]['id_sejour']-1]['libelle_avis']}}</p>
</div>

    
</body>
</html>