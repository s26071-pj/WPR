<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form name="form" action="" method="post">
        Narodowość: <input type="number" name="parametr" id="parametr">
        <input type="submit" value="Submit">
    </form> -->
    <form name="form" action="" method="post">
        Długość boku: <input type="number" name="parametr" id="parametr">
        <input type="submit" value="Submit">
    </form>
    <form name="form" action="" method="post">
        Liczba: <input type="number" name="parametr" id="parametr">
        <input type="submit" value="Submit">
    </form>

    
    <?php

    //Zadanie 3.1
    //do zmienienia rand na skrypy losowania
        $array = [];
        for($i=0;$i<20;$i++) {
            $liczba = rand(0, 100);
            $array[] = $liczba;
        }

        echo 'Tablica: ';
        foreach($array as $number) {
            echo $number."\n";
        };

        $length = 0;
        foreach($array as $element) {
            $length++;
        }

        //for
        $max = 0;
        // for($j=0; $j < $length; $j++) {
        //     if($array[$j] > $max) {
        //         $max = $array[$j];
        //     }
        // }
        // echo $max;

        //while
        $k=0;
        // while($k < $length) {
        //     if($array[$k] > $max) {
        //         $max = $array[$k];
        //     }
        //     $k++;
        // }
        // echo $max;

        //do while
        // do {
        //     if($array[$k] > $max) {
        //         $max = $array[$k];
        //     }
        //     $k++;
        // } while($k < $length);
        // echo $max;

        //foreach
        foreach($array as $element) {
            if($element > $max) {
                $max = $element;
            }
        }
        echo $max;
    ?>

    <?php
    //Zadanie 3.2
    ?>
    <?php
    //Zadania 3.3
        $bok = $_POST['parametr'];
        if(!empty($bok)) {
            for($i=0; $i<$bok; $i++) {
                echo "&nbsp&nbsp&nbsp&nbsp&nbsp".$i+1;
            }
            for($j=0; $j<$bok;) {
                $j++;
                echo '<br /><br />'.$j;
                $x=0;
                $y=1;
                for($x; $x<$bok; $x++) {
                    echo "&nbsp&nbsp&nbsp&nbsp".$j*$y;
                    $y++;
                }
            }
        }
    ?>

<?php
//Zadanie 3.4

        $liczba = $_POST['parametr'];
        if(!empty($liczba)) {
            $count=0;
            $podzielna=0;
            for($x=1; $x<100; $x++) {
                if($x > $liczba) break;
                if($liczba % $x == 0) $podzielna++;
                $count++;
                if($podzielna>2) break;
            }
            echo $count;
            if($podzielna<=2) echo "Liczba pierwsza";
            else echo "Nie jest liczbą pierwszą";
        }
    ?>
</body>
</html>