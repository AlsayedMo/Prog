<?php

$aanhef = array(
    "aanhef" => "Beste",
    "persoon" => "");

$korting = array(
    "product" => "U heeft in de voorgaande bestelling voor [[product]] gekozen",
    "korting" => "Bij Uw volgende bestelling kunnen we U een korting van 10% aanbieden op hetzelfde product"
);

$ondertekening = array(
  "groet" => "Met vriendelijke groet,",
  "naam" => "",
  "functie" => "Directeur Webshop beheer"
);

/*
 * Opdracht 1:
 * Laat de inhoud van alle arrays zien
 * Gebruik daarvoor de functies var_dump() en print_r()u
 */
print_r($ondertekening);
echo '<br><br>';
print_r($korting);
echo '<br><br>';
var_dump($aanhef);
echo '<br><br>';

/*
 * Opdracht 2:
 * Vervang de waarde van persoon, in de array aanhef naar 'klant'
 * Vervang de waarde van naam, in de array ondertekening naar 'jouw naam'
 */
$aanhef['person'] = 'klant';
$ondertekening['naam'] = 'Mohamad';

var_dump($aanhef);
echo '<br><br>';
var_dump($ondertekening);
echo '<br><br>';

/*
 * Opdracht 3:
 * Vervang het woord [[product]] door jouw gekozen product in de winkelmand opdracht
 * Gebruik hiervoor de methode str_replace().
 */
$korting['product'] = str_replace('[[product]]', ' esspresso', $korting['product']);
print_r($korting);
/*
 * Opdracht 4:
 * Voeg nu alle arrays samen in een nieuwe array die je $aanbieding noemt.
 * Gebruik hiervoor de methode array_merge()
 */
$aanbieding = array_merge($aanhef, $korting, $ondertekening);

/*
 * Opdracht 5:
 * Toon de inhoud van de nieuwe array $aanbieding
 */
echo '<pre>';
var_dump($aanbieding);
echo '</pre>';

?>
