<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

<?php
    echo  '
        
        <h3>zadanie - rezerwacja hotelu</h3>

    <form name="reservationForm" method="POST" action="reservationpart2.php">

        <label for="guestsNumber" >Ilosc osób</label>
        <select name="guestsNumber" id="guestsNumber">
            <option value="1">1 osoba</option>
            <option value="2">2 osoby</option>
            <option value="3">3 osoby</option>
            <option value="4">4 osoby</option>
        </select>
        <br>

        

        Potrzebne lozko dla dziecka:
        <input type="checkbox" name="childBed" value="Tak">
        <br>
        <br>

        Wybierz jakie udoognienia wymagne:
        <br>

        <input type="checkbox" id="wifi" name="wifi" value="Tak">
        <label for="wifi"> Wifi</label>
        <input type="checkbox" id="balcony" name="balcony" value="Tak">
        <label for="balcony"> Balkon</label>
        <input type="checkbox" id="pool" name="pool" value="Tak">
        <label for="pool"> Basen</label>

        <br>
        <br>
        <input type="submit" value="Potwierdz rezerwacje">
    </form>
        
        ';
?>




</body>
</html>