<?php

    $number = $_POST['primeNumber'];
    
    function checkIfPrime($num){
        if ($num <= 1)
        return "Nie jest pierwsza";
        
        $moves = 0;
        for ($i = 2; $i < $num; $i++)
        $moves += 1;
            if ($num % $i == 0 and $num != $i)
                return "Nie jest pierwsza  liczba iteracji:".$moves ;
        return "Tak jest pierwsza  liczba iteracji: ".$moves;
    }

    if (($number>0) and ($number-(int)$number ==0)){
        
        echo checkIfPrime($number);
    }else{
        echo "Nie jest to liczba calkowita i dodatnia jednoczesnie";
    }
?>