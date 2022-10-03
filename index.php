
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <br><bR>

<?php

//initialisation de curl
$curl = curl_init();


//Spécifie l'url sur laquelle pointee
curl_setopt($curl, CURLOPT_URL, 'https://api.airtable.com/v0/app708JRaOzw9xfPE/tbl51MmczYubzgbBG?fields%5B%5D=Taille&fields%5B%5D=Type&fields%5B%5D=Nom&fields%5B%5D=NameType&view=Grid');


//Evite d'afficher sur la page le résultat
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


$authorization= "Authorization: Bearer keyjj7aYK1mVu0ngx";
curl_setopt($curl, CURLOPT_HTTPHEADER,array('Content-type: application /json', $authorization) );


//Execute la session cURL
$resultat= curl_exec($curl);

//Ferme la session cURL
curl_close($curl);

//Converti le PHP en JSON
$resultat= json_decode($resultat);


foreach ($resultat->records as $record) { 
    print_r($record->fields);
    echo '<p><a href="">'.$record->fields->NameType.'</a></p>';
}

?>




</body>
</html>