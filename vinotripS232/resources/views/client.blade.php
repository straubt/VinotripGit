<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Clients : </h1>
    <ul>
        @foreach ($client as $unClient)
        <li> {{$unClient['nom_client']}} {{$unClient['prenom_client']}}</li>
        @endforeach
    </ul>
</body>
</html>