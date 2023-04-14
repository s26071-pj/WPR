<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezerwacja hotelowa</title>
</head>
<body>
<form action="summary.php" method="post">
        <label for="num_of_people">Ilość osób:</label>
        <select id="num_of_people" name="num_of_people" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <br>
        <label for="first_name">Imię:</label>
        <input type="text" id="first_name" name="first_name" required>
        <br>
        <label for="last_name">Nazwisko:</label>
        <input type="text" id="last_name" name="last_name" required>
        <br>
        <label for="address">Adres:</label>
        <input type="text" id="address" name="address" required>
        <br>
        <label for="credit_card">Dane karty kredytowej:</label>
        <input type="text" id="credit_card" name="credit_card" required>
        <br>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="check_in_date">Data pobytu:</label>
        <input type="date" id="check_in_date" name="check_in_date" required>
        <br>
        <label for="arrival_time">Godzina przyjazdu:</label>
        <input type="time" id="arrival_time" name="arrival_time" required>
        <br>
        <label for="child_bed">Dostawienie łóżka dla dziecka:</label>
        <input type="checkbox" id="child_bed" name="child_bed">
        <br>
        <label for="amenities">Udogodnienia:</label>
        <select id="amenities" name="amenities[]" multiple>
            <option value="klimatyzacja">Klimatyzacja</option>
            <option value="popielniczka">Popielniczka</option>
        </select>
        <br>
        <input type="submit" value="Zarezerwuj">
    </form>

    <?php
        
        $num_of_people = $_POST['num_of_people'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $credit_card = $_POST['credit_card'];
        $email = $_POST['email'];
        $check_in_date = $_POST['check_in_date'];
        $arrival_time = $_POST['arrival_time'];
        $child_bed = isset($_POST['child_bed']) ? 'Tak' : 'Nie';
        $amenities = isset($_POST['amenities']) ? $_POST['amenities'] : array();

        
        echo "<p><strong>Ilość osób:</strong> $num_of_people</p>";
        echo "<p><strong>Imię:</strong> $first_name</p>";
        echo "<p><strong>Nazwisko:</strong> $last_name</p>";
        echo "<p><strong>Adres:</strong> $address</p>";
        echo "<p><strong>Dane karty kredytowej:</strong> $credit_card</p>";
        echo "<p><strong>E-mail:</strong> $email</p>";
        echo "<p><strong>Data pobytu:</strong> $check_in_date</p>";
        echo "<p><strong>Godzina przyjazdu:</strong> $arrival_time</p>";
        echo "<p><strong>Dostawienie łóżka dla dziecka:</strong> $child_bed</p>";
        echo "<p><strong>Udogodnienia:</strong> " . implode(", ", $amenities) . "</p>";
    ?>

    <?php
    //dodany krok
    if(isset($_POST['num_of_people'])) {
        $num_of_people = $_POST['num_of_people'];
        for ($i = 1; $i <= $num_of_people; $i++) {
            echo "<h3>Osoba $i</h3>";
            echo "<label for='first_name_$i'>Imię:</label>";
            echo "<input type='text' id='first_name_$i' name='first_name_$i' required>";
            echo "<br>";
            echo "<label for='last_name_$i'>Nazwisko:</label>";
            echo "<input type='text' id='last_name_$i' name='last_name_$i' required>";
            echo "<br>";
            echo "<label for='address_$i'>Adres:</label>";
            echo "<input type='text' id='address_$i' name='address_$i' required>";
            echo "<br>";
            echo "<label for='credit_card_$i'>Dane karty kredytowej:</label>";
            echo "<input type='text' id='credit_card_$i' name='credit_card_$i' required>";
            echo "<br>";
            echo "<label for='email_$i'>E-mail:</label>";
            echo "<input type='email' id='email_$i' name='email_$i' required>";
            echo "<br>";
            
        }
    }
?>
</body>
</html>