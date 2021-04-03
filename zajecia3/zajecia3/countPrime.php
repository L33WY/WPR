<?php

    $number = $_POST['primeNumber'];
    
    function checkIfPrime($num){
        if ($num <= 1)
        return "Nie jest pierwsza";

        for ($i = 2; $i < $num; $i++)
            if ($num % $i == 0)
                return "Nie jest pierwsza";
        return "Tak jest pierwsza";
    }

    if (($number>0) and ($number-(int)$number ==0)){
        
        echo checkIfPrime($number);
    }else{
        echo "Nie jest to liczba calkowita i dodatnia jednoczesnie";
    }
?>