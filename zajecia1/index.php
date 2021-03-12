<?php

echo("Zadanie pierwsze:");
function dice(){
    return rand(1,6);
}
echo dice();


echo("<br>Zadanie drugie: ");
function radious($r){
    return $r*2;
} 
echo radious(5);

echo("<br>Zadanie trzecie: ");

function censoring($sentence){

    $censore = array('bad', 'rude', 'evil');
    
    return str_replace($censore, "****", $sentence);
}

echo censoring("evil guy");

echo("<br>Zadanie czwarte: ");

function pesel($pesel){
    $year = substr($pesel, 0, 2);
    $month = substr($pesel, 2, 2);
    $day = substr($pesel, 4, 2);
    $birth = "rok: 20";
    $birth .= $year.= " miesiąc: ";
    $birth .=$month .= " dzień: ";
    $birth .= $day;
    
    return $birth;
}
echo pesel("01082507575");

echo "<br>Zadanie piąte: <br>";

function triangle($a, $h){
    $score = ($a * $h)/2;
    return $score;
}
echo "Pole Trójkąta: ";
echo triangle(4, 2);

function rectangle($a, $b){
    $score = $a*$b;
    return $score;
}

echo "<br> Pole prostokąta: ";
echo rectangle(5, 6);

function trapeze($a, $b, $h){
    $score = (($a+$b)*$h)/2;
    return $score;
}

echo "<br> Pole trapezu: ";
echo trapeze(2,2,8);

?>

