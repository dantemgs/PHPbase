<?php
$site = file_get_contents("site.tpl");
$header = file_get_contents("header.tpl");
$footer = file_get_contents("footer.tpl");

$title = "Главная";
$year = date("Y");

$header = str_replace("{{TITLE}}", $title, $header);
$footer = str_replace("{{YEAR}}", $year, $footer);


function task1()
{
    $a = rand(-100, 100);
    $b = rand(-100, 100);

    if ($a >= 0 && $b >= 0) {
        return $a - $b;
    } elseif ($a < 0 && $b < 0) {
        return $a * $b;
    } else {
        return $a + $b;
    }
}

//test

function task2()
{
    $a = rand(0, 15);
    $str = '';
    $str = print_sequence($a, $str);

    switch ($a) {
        case 0:
            $str .= "0<br>";
        case 1:
            $str .= "1<br>";
        case 2:
            $str .= "2<br>";
        case 3:
            $str .= "3<br>";
        case 4:
            $str .= "4<br>";
        case 5:
            $str .= "5<br>";
        case 6:
            $str .= "6<br>";
        case 7:
            $str .= "7<br>";
        case 8:
            $str .= "8<br>";
        case 9:
            $str .= "9<br>";
        case 10:
            $str .= "10<br>";
        case 11:
            $str .= "11<br>";
        case 12:
            $str .= "12<br>";
        case 13:
            $str .= "13<br>";
        case 14:
            $str .= "14<br>";
        case 15:
            $str .= "15<br>";
            return $str;
        default:
            return 'Ничего не найдено';

    }
}

function print_sequence($a, $str)
{
    if ($a === 15) {
        $str .= "15<br><hr>";
        return $str;
    }
    $str .= "{$a}<br>";
    return print_sequence($a + 1, $str);
}

function task34()
{

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

    function mathOperation($arg1, $arg2, $operation, $ROUND_UP = '0')
    {
        switch ($operation) {
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
    $str_sum = "Сумма чисел равна: {$sum}<br>";

    $subtract = mathOperation($a, $b, '-');
    $str_sub = "Разность чисел равна: {$subtract}<br>";

    $multiply = mathOperation($a, $b, '*');
    $str_mul = "Произведение чисел равно: {$multiply}<br>";

    $divide = mathOperation($a, $b, '/', ROUND_UP);
    $str_div = "Частное чисел равно: {$divide}<br>";

    return "{$str_sum}{$str_sub}{$str_mul}{$str_div}";
}

function task6()
{
    $val = rand(0, 3);
    $pow = rand(0, 3);
    return power($val, $pow);
}

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
}

$task1 = task1();
$task2 = task2();
$task34 = task34();
$task6 = task6();

$content = file_get_contents("content.tpl");

$content = str_replace("{{'1'}}", $task1, $content);
$content = str_replace("{{'2'}}", $task2, $content);
$content = str_replace("{{'34'}}", $task34, $content);
$content = str_replace("{{'6'}}", $task6, $content);

$site = str_replace("{{HEADER}}", $header, $site);
$site = str_replace("{{CONTENT}}", $content, $site);
$site = str_replace("{{FOOTER}}", $footer, $site);

echo $site;
