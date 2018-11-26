<?
//1

//$max = 100;
//$i = -1;
//while ($i <= $max){
//    $i++;
//
//    if ($i%3){
//        continue;
//    }
//    echo "{$i} ";
//}

//2

/*
$max = 10;
$i = 0;
do {
    if ($i === 0) {
        echo "{$i} - это ноль.<br><br>";
    } elseif ($i % 2) {
        echo "{$i} - это нечетное число.<br><br>";
    } elseif (!($i % 2)) {
        echo "{$i} - это четное число.<br><br>";
    }
    $i++;
} while ($i <= $max);

*/

//3,8

/*
$arr = [
    'Московская область' => [
        'Москва',
        'Зеленоград',
        'Клин',
    ],
    'Ленинградская область' => [
        'Санкт-Петербург',
        'Всеволожск',
        'Павловск',
        'Кронштадт',
    ],
    'test' => [
        'Кывфалы',
        'Кывфалы',
        'Кывфалы',
    ]
];

function get_arr($arr)
{
    foreach ($arr as $key => $value) {
        if (is_array($value)) {
            echo "{$key}:<br>";

            $last_elem = array_pop($value);

            get_arr($value);
            echo "{$last_elem}.<br><br>";
        } else {
            echo "{$value}, ";
        }

    }
}


get_arr($arr);
*/

//4

/*
$translator = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'э' => 'e',
    'ю' => 'yu',
    'я' => 'ya'
];

$str = 'яабвгэюяабвгэюя';
$str2 = '';

for ($i = 0; $i < strlen($str) >> 1; $i++) {
    $letter_english = $translator[mb_substr($str, $i, 1)];
    if (!$letter_english) {
        continue;
    }
    $str2 .= $letter_english;

}
echo $str2;

*/

//5

//$str = 'ads asdasdsa dsassa';
//$str = str_replace(' ', '_', $str);
//echo $str;

//6

/*
$menu = [
    [
        'href' => '#',
        'title' => 'Меню1',
        'sub_menu' => [
            [
                'href' => '#',
                'title' => 'Меню1',
                'sub_menu' => '',
            ],
            [
                'href' => '#',
                'title' => 'Меню2',
                'sub_menu' => '',
            ],
            [
                'href' => '#',
                'title' => 'Меню3',
                'sub_menu' => '',
            ],
        ],
    ],
    [
        'href' => '#',
        'title' => 'Меню2',
        'sub_menu' => '',
    ],
    [
        'href' => '#',
        'title' => 'Меню3',
        'sub_menu' => '',
    ],
    [
        'href' => '#',
        'title' => 'Меню4',
        'sub_menu' => '',
    ],
    [
        'href' => '#',
        'title' => 'Меню5',
        'sub_menu' => '',
    ],
];

function get_menu($arr)
{
    $str = "<ul>";

    foreach ($arr as $value) {
        $str .= "<li><a href='{$value["href"]}'>{$value["title"]}</a>";

        if ($value["sub_menu"]) {
            $str .= get_menu($value["sub_menu"]);
        }
        $str .= "</li>";
    }
    $str .= "</ul>";
    return $str;
}

echo get_menu($menu);
*/

//7

//$max = 9;
//for ($i = 0; $i <= $max; print_r($i), $i++){
//};

//9

/*

function translator ($str){
    $translator = [
        ' ' => ' ',
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'э' => 'e',
        'ю' => 'yu',
        'я' => 'ya'
    ];

    $str2 = '';

    echo strlen($str);

    for ($i = 0; $i < strlen($str); $i++) {
        $letter_english = $translator[mb_substr($str, $i, 1)];
        if (!$letter_english) {
            continue;
        }
        $str2 .= $letter_english;

    }
    return $str2;
}

function replaceTr ($str){
    $str = str_replace(' ', '_', $str);
    return $str;
}

$str = 'я я яя';
$str = translator($str);
$str = replaceTr($str);
echo $str;

*/

//10

//$length = 100;
//$max_number = 200;
//$arr = [];
//
//while (true){
//    if (count($arr) === $length){
//        var_dump($arr);
//        break;
//    }
//
//    $number = rand(1, $max_number);
//    if (empty($arr)){
//        $arr[] = $number;
//    } else {
//        for ($i = 0; $i < count($arr); $i++){
//            if ($arr[$i] === $number){
//                continue;
//            }
//            $arr[] = $number;
//        }
//    }
//}













