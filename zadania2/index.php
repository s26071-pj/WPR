<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: black;
            color: white;
        }

    </style>
</head>
<body>
<!-- <form name="form" action="" method="post">
    Indeks tablicy: <input type="number" name="parametr" id="parametr">
    <input type="submit" value="Submit">
</form> -->
<form name="form" action="" method="post">
    Narodowość: <input type="text" name="parametr" id="parametr">
    <input type="submit" value="Submit">
</form>
<?php
//Zadanie 2.1

// $parametr = $_POST['parametr'];
// $array = [];
// for($i=0;$i<20;$i++) {
//     $liczba = rand(0, 100);
//     $array[] = $liczba;
// }
// echo $array[$parametr];
?>
<?php
//Zadanie 2.2

$array = [
    'Polska' => 'Polak/Polka',
    'Ameryka' => 'Amerykanin/Amerykanka',
    'Brazylia' => 'Brazylijczyk/Brazylijka'
];

    $parametr = $_POST['parametr'];
    foreach ($array as $kraj => $value) {
        if($parametr === $kraj){
            $wybrany = $value;
            break;
        }
    }
    if(!empty($wybrany)) echo $wybrany;
    else echo 'Nie znalezionop narodowości';

?>
</body>
</html>