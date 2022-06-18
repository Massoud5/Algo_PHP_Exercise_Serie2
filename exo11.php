<h1>Exercice 11</h1>

<p>
    Ecrire une fonction personnalisée qui affiche une date en français (en toutes 
    lettres) à partir d’une <br>chaîne de caractère représentant une date.
    <br>
    Exemple :<br>
    <code>formaterDateFr("2018-02-23");</code><br>
    <br>
</p>

<?php


echo formaterDateFr("2018-02-23"); 

function formaterDateFr($dateString) {

    $locale = "fr_FR";
    $dateType = IntlDateFormatter::FULL;
    $timeType = IntlDateFormatter::FULL;
    $formatter =new IntlDateFormatter($locale, $dateType, $timeType);
    $dateTime = new DateTime($var);
    return $formatter->format($dateTime);
    
}


// function formaterDateFr($dateString) {
     
//     $value = func_get_arg(0);d 
    
//     function formaterDateEn($funcArgumentValue){
//     $date = new DateTime($funcArgumentValue); 
//         $dateEnFormat = $date -> format("l d F Y");
    
//         return $dateEnFormat;
//     }

//     $dateEn = formaterDateEn($value);

//     $english_days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
//     $french_days = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
//     $english_months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
//     $french_months = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];

//     $dateFr = str_replace($english_months, $french_months, str_replace($english_days, $french_days, $dateEn ) );

//     return $dateFr;
// }