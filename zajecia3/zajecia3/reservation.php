<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
</head>
<body>
    
<?php

$guestsNumber = $_POST['guestsNumber'];
$guestName = $_POST['guestName'];
$guestLastName = $_POST['guestLastName'];
$guestEmail = $_POST['guestEmail'];
$guestTel = $_POST['guestTel'];
$guestCard = $_POST['guestCard'];
$rentDate = $_POST['rentDate'];
if (isset($_POST['childBed'])){
    $childbed = $_POST['childBed'];
}

if (isset($_POST['wifi'])){
    $wifi = $_POST['wifi'];
}

if (isset($_POST['balcony'])){
    $balcony = $_POST['balcony'];
}

if (isset($_POST['pool'])){
    $pool = $_POST['pool'];
}


echo "<h2>Potwierdzenie rezerwacji</h2>";

echo "Dane rezerwującego:<br>
Imie: $guestName; | Nazwisko: $guestLastName | Email: $guestEmail <br>
Telefon: $guestTel | Numer karty: $guestCard <br<br>
Apartament ilu osobowy: $guestsNumber | Data rezerwacji: $rentDate;
<br>";

echo "Lozko dzieciece:";
if (isset($_POST['childBed'])){
        echo $childbed;
    }else{
        echo "Nie";
    }
echo "| Wifi:";
if (isset($_POST['wifi'])){
    echo $wifi;
}else{
    echo "Nie";
}
echo "| Balkon:"; 
if (isset($_POST['balcony'])){
    echo $balcony;
}else{
    echo "Nie";
}
echo "| Basen:";
if (isset($_POST['pool'])){
    echo $pool;
}else{
    echo "Nie";
};
?>

</body>
</html>