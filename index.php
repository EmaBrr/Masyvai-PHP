<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // 1. Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
        echo "<h3>Pirmas pratimas:</h3>";
        $arr = [];
        for ($i=0; $i < 30; $i++) { 
            $arr[$i] = rand(5, 25);
        };
        print_r($arr);

        echo "<br>";

        // 2. Naudodamiesi 1 uždavinio masyvu:
        // a) Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
        echo "<h3>Antras pratimas a):</h3>";

        $countArray = count($arr);
        $counter10 = 0;
        for ($i=0; $i < $countArray; $i++) { 
            if ($arr[$i] == 10) {
                $counter10++;
            };
        };
        echo "Kiek yra '10' elementų: $counter10";

        // b) Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
        echo "<h3>Antras pratimas b):</h3>";
        $arrMax = max($arr);

        for ($i=0; $i < $countArray; $i++) { 
            if ($arr[$i] == $arrMax) {
                echo "Reikšmė: $arr[$i], ";
                echo "indeksas masyve: $i";
                echo "<br>";
            };
        };

        // c) Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
        echo "<h3>Antras pratimas c):</h3>";
        $suma = 0;
        for ($i=0; $i < $countArray; $i++) { 
            if ($i % 2 == 0) {
                $suma = $suma + $i;
            };
        };
        echo "Lyginių indeksų reikšmių suma yra lygi: $suma.";

        // d) Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
        echo "<h3>Antras pratimas d):</h3>";
        $arr1 = [];
        for ($i=0; $i < $countArray; $i++) { 
            $arr1[$i] = $arr[$i]-1;
        };
        print_r($arr1);

        echo "<br>";

        // e) Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
        echo "<h3>Antras pratimas e):</h3>";
        for ($i=0; $i < 10; $i++) { 
            $rand = rand(5,25);
            $arr1[] = $rand;
        };
        print_r($arr1);
        
        // f) Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
        echo "<h3>Antras pratimas f):</h3>";
        $poriniai = [];
        $neporiniai = [];
        $countArray1 = count($arr1);

        for ($i=0; $i < $countArray1; $i++) { 
            if ($i % 2 == 0) {
                $poriniai[$i] = $arr1[$i];
            } else {
                $neporiniai[$i] = $arr1[$i];
            };
        };

        echo "Porinis masyvas:";
        echo "<br>";
        print_r($poriniai);
        echo "<br>";
        echo "<br>";
        echo "Neporinis masyvas:";
        echo "<br>";
        print_r($neporiniai);

        // g) Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
        echo "<h3>Antras pratimas g):</h3>";
                
        // function replace_key($arr, $oldkey, $newkey) {
        //     if(array_key_exists( $oldkey, $arr)) {
        //         $keys = array_keys($arr);
        //         $keys[array_search($oldkey, $keys)] = $newkey;
        //         return array_combine($keys, $arr);	
        //     }
        //     return $arr;    
        // };
        // echo "<br>";echo "<br>";echo "<br>";
        // print_r(replace_key($poriniai, 4, 0));
        // echo "<br>";echo "<br>";echo "<br>";
        
        for ($i=0; $i < $countArray1; $i++) { 
            if ($arr1[$i] > 15) {
                $arr1[$i] = 0;
            };
        };

        print_r($arr1);

        // h) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
        echo "<h3>Antras pratimas h):</h3>";

        for ($i=0; $i < $countArray1; $i++) { 
            if ($arr1[$i] > 10) {
                echo "Indeksas: $i";
                break;
            };
        };

        // i) Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;
        echo "<h3>Antras pratimas i):</h3>";

        for ($i=0; $i < $countArray1; $i++) { 
            if ($i % 2 == 0) {
                unset($arr1[$i]);
            };
        };

        print_r($arr1);

        // 3. Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.
        echo "<h3>Trečias pratimas:</h3>";
        $stringArray = [];

        for ($i=0; $i < 200; $i++) { 
            $str = 'ABCD';
            $shuffled = str_shuffle($str);  
            $randomLetter = substr($shuffled,3);
            $stringArray[] = $randomLetter;
        }; 

        print_r($stringArray);

        // 4. Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
        echo "<h3>Ketvirtas pratimas:</h3>";
        sort($stringArray);
        print_r($stringArray);

        // 5. Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. 
        // Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.

        //nesuprantu sąlygos

        // 6. Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. 
        // Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).
        echo "<h3>Šeštas pratimas:</h3>";
        $pirmasMasyvas = [];
        $antrasMasyvas = [];

        for ($i=0; $i < 100; $i++) { 
            $randomNumber = rand(100, 999);
            if ($i > 0) {
                for ($j=0; $j < $i; $j++) { 
                    if ($pirmasMasyvas[$j] <> $randomNumber) {
                        $pirmasMasyvas[] = $randomNumber;
                        break;
                    };
                };
            } else {
                $pirmasMasyvas[] = $randomNumber;
            };
        };
        print_r($pirmasMasyvas);

        echo "<br>";
        echo "<br>";

        for ($i=0; $i < 100; $i++) { 
            $randomNumber = rand(100, 999);
            if ($i > 0) {
                for ($j=0; $j < $i; $j++) { 
                    if ($antrasMasyvas[$j] <> $randomNumber) {
                        $antrasMasyvas[] = $randomNumber;
                        break;
                    };
                };
            } else {
                $antrasMasyvas[] = $randomNumber;
            };
        };
        print_r($antrasMasyvas);


        //7. Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, 
        // bet nėra antrame 6 uždavinio masyve.
        echo "<h3>Septintas pratimas:</h3>";

        // $newArray = [];
        // // $pirmasMasyvas = [1,2,3];
        // // $antrasMasyvas = [1,4,3];
        // $countPirmasMasyvas = count($pirmasMasyvas);
        // $countAntrasMasyvas = count($antrasMasyvas);

        // for ($i=0; $i < $countPirmasMasyvas; $i++) { 
        //     for ($a=0; $a < $countAntrasMasyvas; $a++) { 
        //         if ($pirmasMasyvas[$i] == $antrasMasyvas[$a]) {
        //             break;
        //         } else {
        //             $newArray[] = $pirmasMasyvas[$i];
        //         };
        //     };
        // };

        // print_r($newArray);

        $result = array_intersect($pirmasMasyvas, $antrasMasyvas);
        print_r($result);

    ?>
</body>
</html>