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

echo "<br>Zadanie piąte: Jaką figure chcesz policzyć ? trojkat / prostokat / trapez ";

echo ('<form action="#">

    <input type="radio" name="trojkąt" value="<?php echo trojkąt ?>" > <br>
    <input type="radio" name="kwadrat" value="kwadrat"> <br>
    <input type="radio" name="trapez" value="trapez>

</form>')



?>

