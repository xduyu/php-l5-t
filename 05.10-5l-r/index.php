<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .d {
            background: orange;
            color: black;
            padding: 10px;
            font-weight: 700;
        }

        .c {
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php
    // // $arr = ["key" => "value"];
    // // print_r($arr);
    // // сортировка массивов
    // // $num = [4, 17, 1, 3, 5, 9, 2];
    // // // по возрастанию
    // // sort($num);
    // // // по убыванию
    // // rsort($num);
    // // print_r($num);
    // $soc_arr = [
    //     "ivan" => 35,
    //     "Artem" => 45,
    //     "petr" => 25
    // ];
    // // по возрастанию 1, 2, 3
    // // asort($soc_arr);
    // // // по убыванию 3, 2, 1
    // // arsort($soc_arr);
    // // по ключам
    // // по возрастанию 1, 2, 3
    // ksort($soc_arr);
    // // по убыванию 3, 2, 1
    // krsort($soc_arr);

    // print_r($soc_arr);

    // $arr = [
    //     "a" => "привет",
    //     "b" => "dasd",
    //     "c" => "э289вы"
    // ];

    // // сортировка по ключам
    // // $keys = array_keys($arr);
    // $values = array_values($arr);
    // print_r($values);
    // var_dump(array_key_exists("1b", $arr));

    // $arr = [1, 2, 3, 4, 6, 0];
    // foreach ($arr as $k => $v) {
    //     echo $v . '</br>';
    // }
    // for ($i = 0; $i < count($arr); $i++) {
    //     echo $arr[$i];
    // }
    $arr = [];
    $itt_count = 1000;
    $lnum = 0;
    $arrif = 0;
    // for ($i = 0; $i < $itt_count; $i++) {
    //     $num = rand(0, 100);
    //     array_push($arr, $num);
    //     if (count($arr) == $itt_count) {
    //         echo implode(",", $arr) . '</br>';
    //         for ($i = 0; $i < count($arr); $i++) {
    //             $lnum += $arr[$i];
    //             if ($lnum && (count($arr) == $itt_count)) {
    //                 $arrif = $lnum / sizeof($arr);
    //             }
    //         }
    //     }
    // }

    // for ($i = 0; $i < $itt_count; $i++) {
    //     $num = rand(0, 50);
    //     array_push($arr, $num);
    //     if (count($arr) == $itt_count) {
    //         echo implode(", ", $arr);
    //         for ($i = 0; $i < count($arr); $i++) {
    //             if ($arr[$i] % 2 == 0) {
    //                 echo '</br>' . $arr[$i] . ', ';
    //                 $lnum += $arr[$i];
    //             }
    //         }
    //     }
    // }
    // echo '</br>' . $lnum . '</br>';
    // echo $arrif;
    // вложенные циклы
    // for ($i = 0; $i <= 2; $i++) {
    //     echo "<b> </br> $i внешний цикл</b>";
    //     for ($j = 0; $j < 2; $j++) {
    //         echo "</br> $j внутренний цикл";
    //     }
    // }
    // echo "*" . "</br>";
    // echo "**" . "</br>";
    // echo "***" . "</br>";
    // echo "****" . "</br>";
    // echo "*****" . "</br>";
    // $rows = 5;
    // for ($i = 1; $i <= $rows; $i++) {
    //     for ($j = 1; $j <= $i; $j++) {
    //         echo "*";
    //     }
    //     echo "</br>";
    // }
    // echo "<table border='1'>";
    // for ($i = 1; $i < 10; $i++) {
    //     echo "<tr>";
    //     for ($j = 1; $j < 10; $j++) {
    //         $style_class = ($i == 1 || $j == 1) ? "d" : " ";
    //         echo "<td class='" . $style_class . " c'>" . $j * $i . "</td>";
    //     }
    //     echo "</tr>";
    // }
    // echo "</table>";
    // filter, map, reduce 
    $arr = [1, 2, 3, 4, 5];
    $even = array_filter($arr, fn($n) => $n % 2 == 0);
    print_r($even);
    ?>
</body>

</html>