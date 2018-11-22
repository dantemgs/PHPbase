<?php
//1
/*{
    $a = rand(-100, 100);
    $b = rand(-100, 100);

    if ($a >= 0 && $b >= 0) {
        echo $a - $b;
    } elseif ($a < 0 && $b < 0) {
        echo $a * $b;
    } elseif ($a < 0 && $b >= 0 || $a >= 0 && $b < 0) {
        echo $a + $b;
    }
}*/

//2
/*{
    $a = rand(0, 15);
    print_sequence($a);

    function print_sequence($a){
        if ($a === 15){
            echo "15<br><hr>";
            return;
        }
        echo "{$a}<br>";
        print_sequence($a+1);

    }

    switch ($a){
        case 0:
            echo "0<br>";
        case 1:
            echo "1<br>";
        case 2:
            echo "2<br>";
        case 3:
            echo "3<br>";
        case 4:
            echo "4<br>";
        case 5:
            echo "5<br>";
        case 6:
            echo "6<br>";
        case 7:
            echo "7<br>";
        case 8:
            echo "8<br>";
        case 9:
            echo "9<br>";
        case 10:
            echo "10<br>";
        case 11:
            echo "11<br>";
        case 12:
            echo "12<br>";
        case 13:
            echo "13<br>";
        case 14:
            echo "14<br>";
        case 15:
            echo "15<br>";
            break;
        default:
            echo 'Ничего не найдено';

    }
}*/

//3, 4
/*{
    function sum($a, $b)
    {
        return $a + $b;
    }

    function subtract($a, $b)
    {
        return $a - $b;
    }

    function divide($a, $b, $ROUND_UP)
    {
        return ($b === 0) ? 'Нельзя делить на 0' : round($a / $b, $ROUND_UP);

    }

    function multiply($a, $b)
    {
        return $a * $b;
    }

    function mathOperation($arg1, $arg2, $operation, $ROUND_UP = '0'){
        switch ($operation){
            case "+":
                return sum($arg1, $arg2);
            case "-":
                return subtract($arg1, $arg2);
            case "*":
                return multiply($arg1, $arg2);
            case "/":
                return divide($arg1, $arg2, $ROUND_UP);
            default:
                return 'Оператор не найден';
        }
    }

    define('ROUND_UP', '2');
    $a = rand(-100, 100);
    $b = rand(-100, 100);

    $sum = mathOperation($a, $b, '+');
    echo "Сумма чисел равна: {$sum}<br>";

    $subtract = mathOperation($a, $b, '-');
    echo "Разность чисел равна: {$subtract}<br>";

    $multiply = mathOperation($a, $b, '*');
    echo "Произведение чисел равно: {$multiply}<br>";

    $divide = mathOperation($a, $b, '/', ROUND_UP);
    echo "Частное чисел равно: {$divide}<br>";

}*/

//6
/*$val = rand(0, 3);
$pow = rand(0, 3);
echo power($val, $pow);

function power($val, $pow)
{
    if ($val === 0 && $pow === 0) {
        return 'Ноль в нулевой степени не имеет смысла';
    };
    if ($val === 0) {
        return 0;
    };
    if ($pow === 0) {
        return 1;
    }
    if ($pow === 1) {
        return $val;
    }
    return $val * power($val, $pow - 1);
}*/

