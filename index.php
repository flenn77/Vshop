<?php
//initialisation de curl
$curl = curl_init();

//Spécifie l'url sur laquelle pointee
curl_setopt($curl, CURLOPT_URL, 'https://api.airtable.com/v0/app708JRaOzw9xfPE/tbl51MmczYubzgbBG?fields%5B%5D=Nom&view=Grid');

//Evite d'afficher sur la page le résultat
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$authorization= "Authorization: Bearer key065lP2nzxrS7WH";
curl_setopt($curl, CURLOPT_HTTPHEADER,array('Content-type: application /json', $authorization) );

//Execute la session cURL
$resultat= curl_exec($curl);

//Ferme la session cURL
curl_close($curl);

//Converti le PHP en JSON
$resultat= json_decode($resultat);

foreach ($resultat->records as $record) {
    echo $record->fields->Nom;
}

//Affiche le resulat;
echo '<pre>';
print_r($resultat);
echo '</pre>';
?>
