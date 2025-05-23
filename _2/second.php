<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://localhost/devel/favicon.ico" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
    <style>
        html {
            height: 100%;
            width: 100%;
            overflow: hidden;
        }
        body {
            height: 100%;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            overflow: hidden;
        }
        div {
            width: fit-content;
            height: fit-content;
        }
    </style>
</head>
<?php
echo "<div><h1>Завдання 1</h1>";
$arr = ['a', 'b', 'c'];
echo "<code>";
echo var_dump($arr);
echo "</code>";
echo "</div>";

echo "<div><h1>Завдання 2</h1>";
echo "<p>Елемент 1: " . $arr[0] . "</p>";
echo "<p>Елемент 2: " . $arr[1] . "</p>";
echo "<p>Елемент 3: " . $arr[2] . "</p>";
echo "</div>";
?>

<?php
echo "<div><h1>Завдання 3</h1>";
$arr = ['a', 'b', 'c', 'd'];
echo "<p> {$arr[0]} + {$arr[1]}, {$arr[2]} + {$arr[3]} </p>";
echo "</div>";
?>

<?php
echo "<div><h1>Завдання 4</h1>";
$arr = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo "<p> {$result} </p>";
echo "</div>";
?>

<?php
echo "<div><h1>Завдання 5</h1>";
$arr[0] = 1;
$arr[1] = 2;
$arr[2] = 3;
$arr[3] = 4;
$arr[4] = 5;

echo "<code>";
echo var_dump($arr);
echo "</code>";
echo "</div>";
?>

<?php
echo "<div><h1>Завдання 6</h1>";
$arr = ['a' => 1, 'b' => 2, 'c' => 3];

echo "<p> {$arr['c']} </p>";
echo "</div>";
?>

<?php
echo "<div><h1>Завдання 7</h1>";
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$sum = 0;
foreach ($arr as $k => $v) {
    $sum += $v;
}
echo "<p> {$sum} </p>";
echo "</div>";
?>

<?php
echo "<div><h1>Завдання 8</h1>";
$arr = ['Коля' => '1000 $', 'Вася' => '500 $', 'Петя' => '200 $'];

echo "<p>Петя: {$arr['Петя']}<br> Коля: {$arr['Коля']} </p>";
echo "</div>";
?>

<?php
echo "<div><h1>Завдання 9</h1>";
$week = [
    1 => "Monday",
    2 => "Tuesday",
    3 => "Wednesday",
    4 => "Thursday",
    5 => "Friday",
    6 => "Saturday",
    7 => "Sunday"
];
$today = getdate();
echo "<p>{$week[$today['wday']++]}</p>";
echo "</div>";
?>

<?php
echo "<div><h1>Завдання 10</h1>";
$week = [
    1 => "Monday",
    2 => "Tuesday",
    3 => "Wednesday",
    4 => "Thursday",
    5 => "Friday",
    6 => "Saturday",
    7 => "Sunday"
];
$today = getdate();
$day = $today['wday']++;
echo "<p>{$week[$day]}</p>";
echo "</div>";
?>

<?php
echo "<div><h1>Завдання 11</h1>";
$arr = [
    'Cms' => ['joomla', 'wordpress', 'drupal'],
    'Colors' => ['blue' => 'блакитний', 'red' => 'червоний', 'green' => 'зелений']
];

echo "<p>{$arr['Cms'][0]} {$arr['Cms'][2]} {$arr['Colors']['green']} {$arr['Colors']['red']}</p>";
echo "</div>";
?>

<?php
echo "<div><h1>Завдання 12</h1>";
$week = [
    'en' => [
        1 => "Monday",
        2 => "Tuesday",
        3 => "Wednesday",
        4 => "Thursday",
        5 => "Friday",
        6 => "Saturday",
        7 => "Sunday"
    ],
    'ua' => [
        1 => "Понеділок",
        2 => "Вівторок",
        3 => "Середа",
        4 => "Четвер",
        5 => "П'ятниця",
        6 => "Субота",
        7 => "Неділя"
    ]
];
echo "<p>{$week['ua'][1]} {$week['en'][3]}</p>";
echo "</div>";
echo "<div><h1>Завдання 13</h1>";
$lang = 'ua';
$day = 3;
echo "<p>{$week[$lang][$day]}</p>";
echo "</div>";
?>

        </body>

</html>