<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator</title>
</head>
<body>
    <h1>Kalkulator</h1>
    <form action="calculator.php" method="post">
        <label for="num1">Liczba 1:</label>
        <input type="number" id="num1" name="num1">
        <br>
        <label for="num2">Liczba 2:</label>
        <input type="number" id="num2" name="num2">
        <br>
        <label for="operator">Działanie:</label>
        <select id="operator" name="operator">
            <option value="add">Dodawanie</option>
            <option value="subtract">Odejmowanie</option>
            <option value="multiply">Mnożenie</option>
            <option value="divide">Dzielenie</option>
        </select>
        <br>
        <input type="submit" value="Oblicz">
    </form>

    <?php
        
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $opr = $_POST['operator'];
        $result = 0;

        
        switch($opr) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Błąd: Nie można dzielić przez zero";
                    exit;
                }
                break;
            default:
                echo "Błąd: Nieprawidłowe działanie";
                exit;
        }

        
        echo "Wynik: $num1 $opr $num2 = $result";
    ?>
</body>
</html>