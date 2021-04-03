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
        <h3>Zadanie pierwsze - prosty kalkulator</h3>
        <form action="count.php" method="POST">
            <p>Piersza liczba: </p>
            <input type="number" name="firstNumber">

            <br>
            <input type="radio" name="mathCalculation" id="add" value="+">
            <label for="add">dodaj</label><br>
            <input type="radio" name="mathCalculation" id="subtract" value="-">
            <label for="subtract">odejmij</label><br>
            <input type="radio" name="mathCalculation" id="multiply" value="*">
            <label for="multiply">pomnoz</label><br>
            <input type="radio" name="mathCalculation" id="divide" value="/">
            <label for="divide">podziel</label><br>

            <p>Druga liczba: </p>
            <input type="number" name="secondNumber">

            <br>
            <input type="submit" value="zatwierdz">
        </form>
        
        <h3>zadanie drugie - rezerwacja hotelu</h3>

    <form name="reservationForm" method="POST" action="reservation.php">

        <label for="guestsNumber" >Ilosc osób</label>
        <select name="guestsNumber" id="guestsNumber">
            <option value="1">1 osoba</option>
            <option value="2">2 osoby</option>
            <option value="3">3 osoby</option>
            <option value="4">4 osoby</option>
        </select>
        <br>

        Imie:
        <input type="text" name="guestName" required>
        Nazwisko:
        <input type="text" name="guestLastName" required>
        Email:
        <input type="email" name="guestEmail" required>
        <br>
        Telefon:
        <input type="tel" name="guestTel" pattern="[0-9]{3}-[0-9]{3}-[0-9}{3}" required>
        Numer karty:
        <input type="number" name="guestCard" required>
        Dzien wynajmu:
        <input type="date" name="rentDate" required>
        <br><br>

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


    <h3>Zadanie Czwarte - liczba pierwsza</h3>

    <form action="countPrime.php" method="POST">
        Podak liczbe calkowita dodatnia: <br>
        <input type="number" name="primeNumber">
        <br>
        <input type="submit" value="zatwierdz">
    </form>
        
        ';
?>




</body>
</html>