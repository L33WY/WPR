<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation p2</title>
</head>
<body>
    
</body>
</html>

<?php
    session_start();

    
    $_SESSION['persons'] = $_POST['guestsNumber'];

    if (isset($_POST['childBed'])){
        $_SESSION['childBed'] = $_POST['childBed'];
    }
    
    if (isset($_POST['wifi'])){
        $_SESSION['wifi'] = $_POST['wifi'];
    }

    if (isset($_POST['balcony'])){
        $_SESSION['balcony'] = $_POST['balcony'];
    }

    if (isset($_POST['pool'])){
        $_SESSION['pool'] = $_POST['pool'];
    }
?>
<h1>Czesc 2 rezerwacji</h1>
<form name="reservation2" action="summary.php">

<?php
    for ($i=1; $i<= $_SESSION['persons']; $i++){
        echo 'Osoba nr:';
        echo $i;
        echo '<br><br>';
        echo' 
            Imie:
            <input type="text" name="guestName" required>
            Nazwisko:
            <input type="text" name="guestLastName" required>
            Email:
            <input type="email" name="guestEmail" required>
            <br>
            Telefon:
            <input type="tel" name="guestTel" pattern="[0-9]{3}-[0-9]{3}-[0-9}{3}" required><br>';
            

            if ($i == 1){
                echo
            'Numer karty:
            <input type="number" name="guestCard" required>
            Dzien wynajmu:
            <input type="date" name="rentDate" required><br><br>';
            }
            
    }

?>

    <input type="submit">
</form>
