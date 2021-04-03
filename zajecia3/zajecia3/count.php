<?php
    
    $firstNumber = $_POST['firstNumber'];
    $secondNumber = $_POST['secondNumber'];
    $mathCalculation = $_POST['mathCalculation'];
    $mathResoult = eval('return '.$firstNumber .$mathCalculation. $secondNumber.';');

    echo "wynik to: $mathResoult";
?>