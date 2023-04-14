<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rozdział 10 zadanie 3</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Ścieżka: <input type="text" name="path" required><br>
        Nazwa katalogu: <input type="text" name="dirName" required><br>
        Operacja:
        <select name="operation">
            <option value="read" selected>Odczytaj</option>
            <option value="delete">Usuń</option>
            <option value="create">Stwórz</option>
        </select><br>
        <input type="submit" value="Wykonaj">
    </form>

    <?php
    
    function handleDirectoryOperation($path, $dirName, $operation) {
        $path = rtrim($path, '/'); 
        if ($operation == 'read') {
            if (is_dir("$path/$dirName")) {
                echo "Elementy w katalogu $path/$dirName:<br>";
                $files = scandir("$path/$dirName");
                foreach ($files as $file) {
                    if ($file != '.' && $file != '..') {
                        echo $file . "<br>";
                    }
                }
            } else {
                echo "Katalog $path/$dirName nie istnieje<br>";
            }
        } elseif ($operation == 'delete') {
            if (is_dir("$path/$dirName")) {
                if (count(glob("$path/$dirName/*")) === 0) {
                    rmdir("$path/$dirName");
                    echo "Katalog $path/$dirName został usunięty<br>";
                } else {
                    echo "Katalog $path/$dirName nie jest pusty<br>";
                }
            } else {
                echo "Katalog $path/$dirName nie istnieje<br>";
            }
        } elseif ($operation == 'create') {
            if (!is_dir("$path/$dirName")) {
                mkdir("$path/$dirName");
                echo "Katalog $path/$dirName został utworzony<br>";
            } else {
                echo "Katalog $path/$dirName już istnieje<br>";
            }
        }
    }

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $path = $_POST["path"];
        $dirName = $_POST["dirName"];
        $operation = $_POST["operation"];

        handleDirectoryOperation($path, $dirName, $operation);
    }
    ?>
</body>
</html>