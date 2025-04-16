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

<body>
    <?php
    echo "<div>";
    echo "<h1>Завдання 1</h1>";
    $var = "hello";
    echo "<p>$var[0]</p>";
    echo "<p>$var[1]</p>";
    echo "<p>$var[4]</p>";
    echo "</div>";

    echo "<div>";
    echo "<h1>Завдання 2</h1>";
    $secs = pow(60, 2);
    echo "<p>Кількість секунд у годині: $secs</p>";
    echo "</div>";

    echo "<div>";
    echo "<h1>Завдання 3</h1>";
    $var = 1;
    $var += 12;
    $var -= 14;
    $var *= 5;
    $var /= 7;
    $var += 1;
    $var -= 1;
    echo $var;
    echo "</div>";

    echo "<div>";
    echo "<h1>Завдання 4</h1>";
    $a = 3;
    echo "<p>a: <em>$a</em></p>";
    echo "</div>";

    echo "<div>";
    echo "<h1>Завдання 5</h1>";
    $a = 10;
    $b = 2;
    echo "<p>Різниця: " . $a - $b . "</p>";
    echo "<p>Сума: " . $a + $b . "</p>";
    echo "<p>Множення: " . $a * $b . "</p>";
    echo "<p>Ділення: " . $a / $b . "</p>";
    echo "</div>";

    echo "<div>";
    echo "<h1>Завдання 6</h1>";
    $c = 15;
    $d = 2;
    $result = $c + $d;
    echo "<p>$result</p>";
    echo "</div>";

    echo "<div>";
    echo "<h1>Завдання 7</h1>";
    $a = 10;
    $b = 2;
    $c = 5;
    echo "<p>" . $a + $b + $c . "</p>";
    echo "</div>";

    echo "<div>";
    echo "<h1>Завдання 8</h1>";
    $a = 17;
    $b = 10;
    $c = $a - $b;
    $d = 7;
    $result = $c + $d;
    echo "<p>$result</p>";
    echo "</div>";

    echo "<div>";
    echo "<h1>Завдання 9</h1>";
    $text = "Привіт, світ!";
    echo "<p>$text</p>";
    echo "</div>";

    echo "<div>";
    echo "<h1>Завдання 10</h1>";
    $text1 = "Привіт,";
    $text2 = "світ!";
    echo "<p>" . $text1 . " " . $text2 . "</p>";
    echo "</div>";

    echo "<div>";
    echo "<h1>Завдання 10</h1>";
    $name = "Vitalii";
    echo "Hello, $name!";
    echo "</div>";

    echo "<div>";
    echo "<h1>Завдання 11</h1>";
    $age = 18;
    echo "<p>I'm $age years old</p>";
    echo "</div>";

    echo "<div>";
    echo "<h1>Завдання 12</h1>";
    $text = "abcde";
    echo "<p>$text[0]</p>";
    echo "<p>$text[2]</p>";
    echo "<p>$text[4]</p>";
    echo "</div>";

    echo "<div>";
    echo "<h1>Завдання 13</h1>";
    $text = "abcde";
    $text[0] = "!";
    echo "<p>$text</p>";
    echo "</div>";

    echo "<div>";
    echo "<h1>Завдання 14</h1>";
    $num = "12345";
    $num = str_split($num);
    $result = 0;
    foreach ($num as $key => $value) {
        $result += $value;
    }
    echo "<p>Result: $result</p>";
    echo "</div>";

    echo "<div>";
    echo "<h1>Завдання 15</h1>";
    $hour = pow(60, 2);
    $day = $hour * 24;
    $month = $day * 30;
    echo "<p>Кількість секунд у годині: $hour</p>";
    echo "<p>У дні: $day</p>";
    echo "<p>У місяці: $month</p>";
    echo "</div>";

    echo "<div>";
    echo "<h1>Завдання 16</h1>";
    $hour = 13;
    $minute = 10;
    $seconds = 31;
    echo "<p>$hour:$minute:$seconds</p>";
    echo "</div>";

    echo "<div>";
    echo "<h1>Завдання 17</h1>";
    $number = pow(25, 2);
    echo "<p>Квадрат: $number</p>";
    echo "</div>";

    echo "<div>";
    echo "<h1>Завдання 18</h1>";
    $var = 47;
    $var += 7;
    $var -= 18;
    $var *= 10;
    $var /= 20;
    echo $var;
    echo "</div>";

    echo "<div>";
    echo "<h1>Завдання 18</h1>";
    $text = 'Я';
    $text .= ' хочу ';
    $text .= ' знати ';
    $text .= ' PHP! ';
    echo $text;
    echo "</div>";

    echo "<div>";
    echo "<h1>Завдання 19</h1>";
    $var = 10;
    $var++;
    $var++;
    $var--;
    echo $var;
    echo "</div>";

    echo "<div>";
    echo "<h1>Завдання 20</h1>";
    $var = 10;
    $var += 7;
    $var++;
    $var--;
    $var += 12;
    $var *= 7;
    $var -= 15;
    echo $var;
    echo "</div>";
    ?>
</body>

</html>