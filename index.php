<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practic</title>
</head>
<body>
    <?php
//Математические операции с переменными в php
//1
    $a=10;
    $b=2;
    $x=$a+$b;
    $x=$a-$b;
    $x=$a*$b;
    $x=$a/$b;

    echo $x.'<br>';
//2
    $c=10;
    $d=5;
    $res=$c+$d;

    echo $res.'<br>';
//3
    $a=1;
    $b=2;
    $c=3;
    $t=$a+$b+$c;

    echo $t.'<br>';
//4
    $a=10;
    $b=5;
    $c=$a-$b;
    $d=7;
    $res=$c+$d;

    echo $res.'<br>';
//Сложение строк в php
//1
    $str='hello';

    echo $str.'<br>'
//2
    $str = 'abc' . 'def';
	echo $str.'<br>';
//Пробелы при сложении строк в php
//1
    $str1 = 'hello';
    $str2 = 'world';
    echo $str1 . ' ' . $str2.'<br>';
//Длина строки в php
//1
    $k='lkjhgh';
    $kstrlen=strlen($k);
    echo $kstrlen.'<br>';
//Проблемы с кириллицей в php
//1
    $v='привет мир';
    $vstrlen=strlen($v);
    echo $vstrlen.'<br>';
    ?>
</body>
</html>