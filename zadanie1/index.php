<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania 1</title>
    <form name="form" action="" method="post">
        PESEL: <input type="text" name="pesel" id="pesel">
        <input type="submit" value="Submit">
    </form>
<style>
body{
    background-color: black;
    color: white;
}
</style>

</head>
<body>
    <?php
    //Zadanie 1.1
    function dice() {
    
    $roll = rand(1, 6);
    return $roll;
     }
    $result = dice();
    echo "Wyrzuciłeś:  $result ! <br />";
    ?>

     <?php
     //Zadanie 1.2
     function diameter($radius) {
        $diameter = $radius * 2;
        return $diameter;
      }

      $radius = 6;
      $diameter = diameter($radius);
      echo "<br /> Średnica koła o promieniu $radius wynosi $diameter. <br /><br />";
     ?>

      <?php
      //Zadanie 1.3
      function censure($sentence, $blacklist) {
        $censored_sentence = $sentence;
        foreach($blacklist as $word) {
          $censored_sentence = str_ireplace($word, str_repeat('*', strlen($word)), $censored_sentence);
        //funkcja str_ireplace() służy do podmienienie banowanego wyrazy na gwiazdki zachowując jego długość przy zmianie na * 
        }
        return $censored_sentence;
      }

      $sentence = "Kurwa oraz Pedał to jest niepożądane słowo <br /><br />";
      $blacklist = array("Kurwa", "Pedał");
      $censored_sentence = censure($sentence, $blacklist);
      echo $censored_sentence;
      ?>

<?php

// Zadanie 1.4
        $pesel = $_POST['pesel'];
        $array = [
            '21' => 'Styczeń',
            '22' => 'Luty',
            '23' => 'Marzec',
            '24' => 'Kwiecień',
            '25' => 'Maj',
            '26' => 'Czerwiec',
            '27' => 'Lipiec',
            '28' => 'Sierpień',
            '29' => 'Wrzesień',
            '30' => 'Październik',
            '31' => 'Listopad',
            '32' => 'Grudzień'
        ];
        if(!empty($pesel) && strlen($pesel) == 11) {
            $rr = substr($pesel, 0, 2);
            $mm = substr($pesel, 2, 2);
            $month = $array[$mm];
            if(empty($month)) {
                echo 'Niepoprawny PESEL';
                return;
            }
            $dd = substr($pesel, 4, 2);
            $pppp = substr($pesel, 6, 4);
            $mf = intval(substr($pppp, 3, 1)) % 2 == 0 ? 'zmywara' : 'Big G';
            $kt = substr($pesel, 10, 1);
            echo "$dd-$month-20$rr|$mf|$kt";
        } else echo 'Niepoprawny PESEL';
    ?>

</body>
</html>