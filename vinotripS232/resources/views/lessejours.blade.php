<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/select.css">
    <link rel="stylesheet" href="css/over_image.css">
    <link rel="stylesheet" href="css/styleGeneral.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="images/images.jpg">
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
    <script>
        var sejour = <?php echo json_encode($sejour);?>;
    </script>
    <script src="js/select.js"></script>
    <?php 
    $selectdomaine = "";
    $selectparticipant = "";
    $selecttheme = "";
    $textDomaine = "";
    $textParticipant = "";
    $textTheme = "";
    if(!isset($_SERVER['QUERY_STRING'])){
        $selectdomaine="none";
        $selectparticipant="none";
        $selecttheme="none";
    }
    if(isset($_SERVER['QUERY_STRING'])){
        $selectdomaine = $_GET['Domaine'];
        $selectparticipant = $_GET['Participant'];
        $selecttheme = $_GET['Theme'];
    }
    if($selectdomaine=="none"){
        $textDomaine=str_replace ('_', ' ', "--Quelle_Destination_?--");;
    }
    else{
        $textDomaine = str_replace ('_', ' ', $selectdomaine); 
    }
    if($selectparticipant=="none"){
        $textParticipant=str_replace ('_', ' ', "--Pour_Qui_?--");;
    }
    else{
        $textParticipant = str_replace ('_', ' ', $selectparticipant); 
    }
    if($selecttheme=="none"){
        $textTheme=str_replace ('_', ' ', "--Envie_Particulière_?--");;
    }   
    else{
        $textTheme = str_replace ('_', ' ', $selecttheme); 
    }
    ?>
<form method="get">
    <label for="selector" id="marge"></label>
    <select name="Domaine" id="selector">
        <option value={{$selectdomaine}}>{{$textDomaine}}</option>
        <option value="none">Aucun filtre</option>
        <option value="Bourgogne">Bourgogne</option>
        <option value="Valee_du_Rhone">Valée du rhône</option>
        <option value="Bordeaux">Bordeaux</option>
        <option value="Champagne">Champagne</option>
        <option value="Alsace">Alsace</option>
        <option value="Languedoc-Roussillon">Languedoc-Roussillon</option>
        <option value="Val_de_Loire">Val de Loire</option>
        <option value="Beaujolais">Beaujolais</option>
        <option value="Paris">Paris</option>
        <option value="Sud-Ouest">Sud-Ouest</option>
        <option value="Provence">Provence</option>
        <option value="Catalogne">Catalogne</option>
        <option value="Jura">Jura</option>
    </select>
    <select name="Participant" id="selector">
        <option value={{$selectparticipant}}>{{$textParticipant}}</option>
        <option value="none">Aucun filtre</option>
        <option value="En_Couple">En couple</option>
        <option value="En_Famille">En famille</option>
        <option value="Entre_Amis">Entre Amis</option>
    </select>
    <select name="Theme" id="selector">
        <option value={{$selecttheme}}>{{$textTheme}}</option>
        <option value="none">Aucun filtre</option>
        <option value="Bien-Être">Bien etre</option>
        <option value="Culture">Culture</option>
        <option value="Gastronomie">Gastronomie</option>
        <option value="Sport">Sport</option>
    </select>
    
    <input type="submit" value="confirmer" id="buttonConfirmer">
</form>

<?php

//filtres : 
if(isset($_SERVER['QUERY_STRING'])){
    if ($_GET['Domaine']=="none" && $_GET['Participant']=="none" && $_GET['Theme'] =="none")
    { ?>
        @foreach ($sejour as $unSejour)
        <div class="parent"><div class = "container" ><a href="/sejour?{{$unSejour['id_sejour']}}"><img src="{{$unSejour['photo_sejour']}}" alt="" class="image"><div class = "overlay"><div class = "texte">{{$unSejour['titre_sejour']}}<br>{{$unSejour['prix_min_individuel_sejour']}}€ Par Pers.</div></div></a></div></div>
        @if (!isset($unSejour)):
            <a id="Erreur"> aucun resultat trouvé </a>
        @endforeach <?php 
    }
    if ($_GET['Domaine']!="none" && $_GET['Participant']=="none" && $_GET['Theme'] =="none")
    {
        ?>
        @foreach ($sejour as $unSejour)
        @foreach ($destination as $uneDestination)
        <?php if($uneDestination['libelle_destination'] == strtoupper($_GET['Domaine']) && $uneDestination['id_destination'] == $unSejour['id_destination']) { 
        ?>
        <div class="parent"><div class = "container" ><a href="/sejour?{{$unSejour['id_sejour']}}"><img src="{{$unSejour['photo_sejour']}}" alt="" class="image"><div class = "overlay"><div class = "texte">{{$unSejour['titre_sejour']}}<br>{{$unSejour['prix_min_individuel_sejour']}}€ Par Pers.</div></div></a></div></div>
        <?php  } ?>
        @endforeach
        @endforeach  
        <?php 
    }
    if ($_GET['Domaine']=="none" && $_GET['Participant']!="none" && $_GET['Theme'] =="none")
    {
        ?>
        @foreach ($sejour as $unSejour)
        @foreach ($sejour_to_cat_participant as $uneCatToPart)
        @foreach ($categorie_participant as $uneCategorie)
        <?php if($uneCategorie['lib_categorie_participant'] == strtoupper($_GET['Participant']))
        { 
            if($uneCatToPart['id_categorie_participant'] == $uneCategorie['id_categorie_participant'] && $uneCatToPart['id_sejour'] == $unSejour['id_sejour']) 
            { 
        ?>
        <div class="parent"><div class = "container" ><a href="/sejour?{{$unSejour['id_sejour']}}"><img src="{{$unSejour['photo_sejour']}}" alt="" class="image"><div class = "overlay"><div class = "texte">{{$unSejour['titre_sejour']}}<br>{{$unSejour['prix_min_individuel_sejour']}}€ Par Pers.</div></div></a></div></div>
        <?php  }} ?>
        @endforeach
        @endforeach  
        @endforeach  
        <?php
    }
    if ($_GET['Domaine']=="none" && $_GET['Participant']=="none" && $_GET['Theme'] !="none")
    {
        ?>
        @foreach ($sejour as $unSejour)
        @foreach ($theme as $unTheme)
        <?php if($unTheme['libelle_theme'] == strtoupper($_GET['Theme']) && $unTheme['id_theme'] == $unSejour['id_theme']) { 
        ?>
        <div class="parent"><div class = "container" ><a href="/sejour?{{$unSejour['id_sejour']}}"><img src="{{$unSejour['photo_sejour']}}" alt="" class="image"><div class = "overlay"><div class = "texte">{{$unSejour['titre_sejour']}}<br>{{$unSejour['prix_min_individuel_sejour']}}€ Par Pers.</div></div></a></div></div>
        <?php  }?>
        @endforeach
        @endforeach  
        <?php
    } 
    if ($_GET['Domaine']!="none" && $_GET['Participant']!="none" && $_GET['Theme'] =="none")
    {
        ?>
        @foreach ($sejour as $unSejour)
        @foreach ($destination as $uneDestination)
        @foreach ($sejour_to_cat_participant as $uneCatToPart)
        @foreach ($categorie_participant as $uneCategorie)
        <?php if($uneDestination['libelle_destination'] == strtoupper($_GET['Domaine']) && $uneDestination['id_destination'] == $unSejour['id_destination']) 
        { 
            if($uneCategorie['lib_categorie_participant'] == strtoupper($_GET['Participant']))
            {
                if($uneCatToPart['id_categorie_participant'] == $uneCategorie['id_categorie_participant'] && $uneCatToPart['id_sejour'] == $unSejour['id_sejour']) 
                {
        ?>
        <div class="parent"><div class = "container" ><a href="/sejour?{{$unSejour['id_sejour']}}"><img src="{{$unSejour['photo_sejour']}}" alt="" class="image"><div class = "overlay"><div class = "texte">{{$unSejour['titre_sejour']}}<br>{{$unSejour['prix_min_individuel_sejour']}}€ Par Pers.</div></div></a></div></div>
        <?php  } }}?>
        @endforeach
        @endforeach  
        @endforeach
        @endforeach  
        <?php
    }    
    if ($_GET['Domaine']!="none" && $_GET['Participant']=="none" && $_GET['Theme'] !="none")
    {
        ?>
        @foreach ($sejour as $unSejour)
        @foreach ($destination as $uneDestination)
        @foreach ($theme as $unTheme)
        <?php if($uneDestination['libelle_destination'] == strtoupper($_GET['Domaine']) && $uneDestination['id_destination'] == $unSejour['id_destination']) { 
            if($unTheme['libelle_theme'] == strtoupper($_GET['Theme']) && $unTheme['id_theme'] == $unSejour['id_theme']) { 
            ?>
        <div class="parent"><div class = "container" ><a href="/sejour?{{$unSejour['id_sejour']}}"><img src="{{$unSejour['photo_sejour']}}" alt="" class="image"><div class = "overlay"><div class = "texte">{{$unSejour['titre_sejour']}}<br>{{$unSejour['prix_min_individuel_sejour']}}€ Par Pers.</div></div></a></div></div>
        <?php  } }?>
        @endforeach
        @endforeach  
        @endforeach
        <?php
    }  
    if ($_GET['Domaine']=="none" && $_GET['Participant']!="none" && $_GET['Theme'] !="none")
    {
        ?>
        @foreach ($sejour as $unSejour)
        @foreach ($theme as $unTheme)
        @foreach ($sejour_to_cat_participant as $uneCatToPart)
        @foreach ($categorie_participant as $uneCategorie)
        <?php 
        if($uneCategorie['lib_categorie_participant'] == strtoupper($_GET['Participant']))
        {
            if($uneCatToPart['id_categorie_participant'] == $uneCategorie['id_categorie_participant'] && $uneCatToPart['id_sejour'] == $unSejour['id_sejour']) 
            {
            if($unTheme['libelle_theme'] == strtoupper($_GET['Theme']) && $unTheme['id_theme'] == $unSejour['id_theme']) { 
            ?>
        <div class="parent"><div class = "container" ><a href="/sejour?{{$unSejour['id_sejour']}}"><img src="{{$unSejour['photo_sejour']}}" alt="" class="image"><div class = "overlay"><div class = "texte">{{$unSejour['titre_sejour']}}<br>{{$unSejour['prix_min_individuel_sejour']}}€ Par Pers.</div></div></a></div></div>
        <?php  } }}?>
        @endforeach
        @endforeach  
        @endforeach
        @endforeach
        <?php
    }      
    if ($_GET['Domaine']=="none" && $_GET['Participant']!="none" && $_GET['Theme'] !="none")
    {
        ?>
        @foreach ($sejour as $unSejour)
        @foreach ($theme as $unTheme)
        @foreach ($sejour_to_cat_participant as $uneCatToPart)
        @foreach ($categorie_participant as $uneCategorie)
        <?php 
        if($uneCategorie['lib_categorie_participant'] == strtoupper($_GET['Participant']))
        {
             if($uneCatToPart['id_categorie_participant'] == $uneCategorie['id_categorie_participant'] && $uneCatToPart['id_sejour'] == $unSejour['id_sejour']) 
             { 
            if($unTheme['libelle_theme'] == strtoupper($_GET['Theme']) && $unTheme['id_theme'] == $unSejour['id_theme']) { 
            ?>
        <div class="parent"><div class = "container" ><a href="/sejour?{{$unSejour['id_sejour']}}"><img src="{{$unSejour['photo_sejour']}}" alt="" class="image"><div class = "overlay"><div class = "texte">{{$unSejour['titre_sejour']}}<br>{{$unSejour['prix_min_individuel_sejour']}}€ Par Pers.</div></div></a></div></div>
        <?php  }} }?>
        @endforeach
        @endforeach  
        @endforeach
        @endforeach
        <?php
    } 
    if ($_GET['Domaine']!="none" && $_GET['Participant']!="none" && $_GET['Theme'] !="none")
    {
        ?>
        @foreach ($sejour as $unSejour)
        @foreach ($destination as $uneDestination)
        @foreach ($theme as $unTheme)
        @foreach ($sejour_to_cat_participant as $uneCatToPart)
        @foreach ($categorie_participant as $uneCategorie)
        <?php if($uneDestination['libelle_destination'] == strtoupper($_GET['Domaine']) && $uneDestination['id_destination'] == $unSejour['id_destination']) 
        { 
        if($uneCategorie['lib_categorie_participant'] == strtoupper($_GET['Participant']))
        {
        if($uneCatToPart['id_categorie_participant'] == $uneCategorie['id_categorie_participant'] && $uneCatToPart['id_sejour'] == $unSejour['id_sejour']) 
        {            
        if($unTheme['libelle_theme'] == strtoupper($_GET['Theme']) && $unTheme['id_theme'] == $unSejour['id_theme']) 
        { 
            ?>
        <div class="parent"><div class = "container" ><a href="/sejour?{{$unSejour['id_sejour']}}"><img src="{{$unSejour['photo_sejour']}}" alt="" class="image"><div class = "overlay"><div class = "texte">{{$unSejour['titre_sejour']}}<br>{{$unSejour['prix_min_individuel_sejour']}}€ Par Pers.</div></div></a></div></div>
        <?php  }}}}?>
        @endforeach
        @endforeach  
        @endforeach
        @endforeach
        @endforeach
        <?php
    }           
        $selectdomaine = $_GET['Domaine'];
        $selectparticipant = $_GET['Participant'];
        $selecttheme = $_GET['Theme'];
}
else
{
    ?>
    @foreach ($sejour as $unSejour)
    <div class="parent"><div class = "container" ><a href="/sejour?{{$unSejour['id_sejour']}}"><img src="{{$unSejour['photo_sejour']}}" alt="" class="image"><div class = "overlay"><div class = "texte">{{$unSejour['titre_sejour']}}<br>{{$unSejour['prix_min_individuel_sejour']}}€ Par Pers.</div></div></a></div></div>
    @endforeach 
    <?php

}


?>

    
</body>
</html>

