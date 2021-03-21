<?php
echo "Zadanie 2.1: ";

function random($number){
    
    for ($i=1; $i<=5; $i++){
        $randTable[$i] = rand(1,10);
    }
    return $randTable[$number];
}
echo random(4);


echo "<br>Zadanie 2.2: ";
function nationality($country){
    $countryList["Polska"] = "polakiem";
    $countryList["Anglia"] = "anglikiem";
    
    return $countryList[$country];
}

echo "Jesteś ", nationality("Polska");

echo "<br>Zadanie 3.1: ";

function maxRandom()
{
    $maxNumLoop1 = 0; 
    for ($i=1; $i<=5; $i++){
        $randTable[$i] = rand(1,10);
        if ($maxNumLoop1<$randTable[$i]){
            $maxNumLoop1 = $randTable[$i];
        }
    }

    $maxNumLoop2 = 0;

    $i = 1;
    while ($i<=5){
        if ($maxNumLoop2<$randTable[$i]){
            $maxNumLoop2 = $randTable[$i];
        }
        $i++;
    }

    $maxNumLoop3 = 0;
    $i = 0;

    do{
        if ($maxNumLoop3<$randTable[$i]){
            $maxNumLoop3 = $randTable[$i];
        }
        $i++;
    }while($i<=5);

    /* $maxNumLoop4;

    foreach($randTable as $i){
        if ($maxNumLoop4<$randTable[$i]){
            $maxNumLoop4 = $randTable[$i];
        }
    }
         */
    return $maxNumLoop1 . " oraz " . $maxNumLoop2 . " oraz " . $maxNumLoop3;
    
}

echo maxRandom();

echo "<br>Zadanie 3.2: <br>";

function randDice($turns){
    for ($i=1; $i<=$turns; $i++){
        $randTable[$i] = rand(1,6);
        echo $randTable[$i] . " oraz ";
    }
}
randDice(5);

?>