<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4</title>
</head>
<body>
<form action="liczba_pierwsza.php" method="post">
        <label for="liczba">Wprowadź liczbę:</label>
        <input type="number" name="liczba" id="liczba" required>
        <button type="submit">Sprawdź</button>
    </form>
    <?php
function czyLiczbaPierwsza($liczba) {
    if ($liczba <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($liczba); $i++) {
        if ($liczba % $i === 0) {
            return false;
        }
    }
    return true;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $liczba = $_POST['liczba'];
    if (is_numeric($liczba) && $liczba == round($liczba) && $liczba > 0) {
        $liczba = (int)$liczba;
        $liczbaPierwsza = czyLiczbaPierwsza($liczba);
        if ($liczbaPierwsza) {
            echo "Liczba $liczba jest liczbą pierwszą.";
        } else {
            echo "Liczba $liczba nie jest liczbą pierwszą.";
        }
    } else {
        echo "Wprowadź poprawną liczbę całkowitą dodatnią.";
    }
}
?>

<?php
function czyLiczbaPierwsza($liczba) {
    if ($liczba <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($liczba); $i++) {
        if ($liczba % $i === 0) {
            return false;
        }
    }
    return true;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $liczba = $_POST['liczba'];
    if (is_numeric($liczba) && $liczba == round($liczba) && $liczba > 0) {
        $liczba = (int)$liczba;
        $licznikIteracji = 0; 

        for ($i = 2; $i <= sqrt($liczba); $i++) { 
            $licznikIteracji++; 
            if ($liczba % $i === 0) {
                echo "Liczba $liczba nie jest liczbą pierwszą.";
                break; 
            }
        }

        if ($i > sqrt($liczba)) {
            echo "Liczba $liczba jest liczbą pierwszą.";
        }
        echo "Liczba iteracji pętli: $licznikIteracji"; 
    } else {
        echo "Wprowadź poprawną liczbę całkowitą dodatnią.";
    }
}
?>

</body>
</html>