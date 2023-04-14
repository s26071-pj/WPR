<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rozdział 9 zadanie 1</title>
</head>
<body>
<form action="obliczenia.php" method="get">
        <label for="data">Podaj datę urodzenia:</label>
        <input type="date" id="data" name="data">
        <input type="submit" value="Oblicz">
    </form>

    <?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['data'])) {
        $dataUrodzenia = $_GET['data'];

        
        function dzienTygodnia($data) {
            $dzienTygodnia = date('l', strtotime($data));
            return $dzienTygodnia;
        }

        
        function ukonczoneLata($data) {
            $rokAktualny = date('Y');
            $rokUrodzenia = date('Y', strtotime($data));
            $ukonczoneLata = $rokAktualny - $rokUrodzenia;
            return $ukonczoneLata;
        }

        
        function dniDoNajblizszychUrodzin($data) {
            $dataUrodzenia = new DateTime($data);
            $aktualnaData = new DateTime();
            $aktualnyRok = $aktualnaData->format('Y');
            $dataUrodzenia->modify("$aktualnyRok-$dataUrodzenia->format(m-d)");
            $dniDoNajblizszychUrodzin = $dataUrodzenia->diff($aktualnaData)->format('%a');
            return $dniDoNajblizszychUrodzin;
        }

        $dzienTygodniaUrodzenia = dzienTygodnia($dataUrodzenia);
        $ukonczoneLataUzytkownika = ukonczoneLata($dataUrodzenia);
        $dniDoNajblizszychUrodzin = dniDoNajblizszychUrodzin($dataUrodzenia);

        echo "Dzień tygodnia urodzenia: " . $dzienTygodniaUrodzenia . "<br>";
        echo "Ukończone lata: " . $ukonczoneLataUzytkownika . "<br>";
        echo "Ilość dni do najbliższych przyszłych urodzin: " . $dniDoNajblizszychUrodzin;
    } else {
        echo "Nie podano daty urodzenia.";
    }
}
?>
</body>
</html>