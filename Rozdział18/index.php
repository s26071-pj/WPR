<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie z działu 18</title>
</head>
<body>
    <?php
class NoweAuto {
    public $model_auta;
    public $cena_w_euro;
    public $aktualny_kurs_euro_pln;
    
    public function __construct($model_auta, $cena_w_euro, $aktualny_kurs_euro_pln) {
        $this->model_auta = $model_auta;
        $this->cena_w_euro = $cena_w_euro;
        $this->aktualny_kurs_euro_pln = $aktualny_kurs_euro_pln;
    }
    
    public function obliczCene() {
        return $this->cena_w_euro * $this->aktualny_kurs_euro_pln;
    }
}

class AutoZDodatkami extends NoweAuto {
    public $alarm;
    public $radio;
    public $klimatyzacja;
    
    public function __construct($model_auta, $cena_w_euro, $aktualny_kurs_euro_pln, $alarm, $radio, $klimatyzacja) {
        parent::__construct($model_auta, $cena_w_euro, $aktualny_kurs_euro_pln);
        $this->alarm = $alarm;
        $this->radio = $radio;
        $this->klimatyzacja = $klimatyzacja;
    }
    
    public function obliczCene() {
        return parent::obliczCene() + $this->alarm + $this->radio + $this->klimatyzacja;
    }
}

class Ubezpieczenie extends AutoZDodatkami {
    public $procentowa_wartosc_ubezpieczenia;
    public $liczba_lat_posiadania_samochodu;
    
    public function __construct($model_auta, $cena_w_euro, $aktualny_kurs_euro_pln, $alarm, $radio, $klimatyzacja, $procentowa_wartosc_ubezpieczenia, $liczba_lat_posiadania_samochodu) {
        parent::__construct($model_auta, $cena_w_euro, $aktualny_kurs_euro_pln, $alarm, $radio, $klimatyzacja);
        $this->procentowa_wartosc_ubezpieczenia = $procentowa_wartosc_ubezpieczenia;
        $this->liczba_lat_posiadania_samochodu = $liczba_lat_posiadania_samochodu;
    }
    
    public function obliczCene() {
        $wartosc_samochodu = parent::obliczCene();
        $wartosc_ubezpieczenia = $this->procentowa_wartosc_ubezpieczenia * ($wartosc_samochodu * ((100 - $this->liczba_lat_posiadania_samochodu) / 100));
        return $wartosc_ubezpieczenia;
    }
}
?>
</body>
</html>