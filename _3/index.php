<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Conditions</title>
</head>

<body>
    <?php

    function _1_Task($value)
    {
        echo $value == 0 ? "Вірно" : "Невірно";
    }

    function _2_Task($value)
    {
        echo $value > 0 ? "Вірно" : "Невірно";
    }

    function _3_Task($value)
    {
        echo $value < 0 ? "Вірно" : "Невірно";
    }

    function _4_Task($value)
    {
        echo $value >= 0 ? "Вірно" : "Невірно";
    }

    function _5_Task($value)
    {
        echo $value <= 0 ? "Вірно" : "Невірно";
    }

    function _6_Task($value)
    {
        echo $value != 0 ? "Вірно" : "Невірно";
    }

    function _7_Task($value)
    {
        echo $value == 'test' ? "Вірно" : "Невірно";
    }

    function _8_Task($value)
    {
        echo ($value === 1) ? "Вірно" : "Невірно";
    }

    function _9_Task($value)
    {
        echo (empty($value)) ? "Вірно" : "Невірно";
    }

    function _10_Task($value)
    {
        echo (!empty($value)) ? "Вірно" : "Невірно";
    }

    function _11_Task($value)
    {
        echo (isset($value)) ? "Вірно" : "Невірно";
    }

    function _12_Task($value)
    {
        echo (!isset($value)) ? "Вірно" : "Невірно";
    }

    function _13_Task($value)
    {
        echo ($value == true) ? "Вірно" : "Невірно";
    }

    function _14_Task($value)
    {
        echo ($value != true) ? "Вірно" : "Невірно";
    }

    function _15_Task($value)
    {
        echo ($value > 0 && $value < 5) ? "Вірно" : "Невірно";
    }

    function _16_Task($value)
    {
        $a = ($value == 0 || $value == 2) ? $value + 7 : $value / 10;
        echo $a;
    }

    function _17_Task($value)
    {
        $a = $value[0];
        $b = $value[1];
        echo ($a <= 1 && $b >= 3) ? ($a + $b) : ($a - $b);
    }

    function _18_Task($value)
    {
        $a = $value[0];
        $b = $value[1];
        echo ($a > 2 && $a < 11) || ($b >= 6 && $b < 14) ? "Вірно" : "Невірно";
    }

    function _19_Task($value)
    {
        switch ($value) {
            case 1:
                $result = 'зима';
                break;
            case 2:
                $result = 'літо';
                break;
            case 3:
                $result = 'весна';
                break;
            case 4:
                $result = 'осінь';
                break;
            default:
                $result = 'Невідоме значення';
        }
        echo $result;
    }

    function _20_Task($value)
    {
        switch (true) {
            case ($value >= 1 && $value <= 10):
                echo "Перша декада";
                break;
            case ($value >= 11 && $value <= 20):
                echo "Друга декада";
                break;
            case ($value >= 21 && $value <= 31):
                echo "Третя декада";
                break;
            default:
                echo "Некоректне значення";
        }
    }

    function _21_Task($value)
    {
        switch ($value) {
            case 12:
            case 1:
            case 2:
                echo "Зима";
                break;
            case 3:
            case 4:
            case 5:
                echo "Весна";
                break;
            case 6:
            case 7:
            case 8:
                echo "Літо";
                break;
            case 9:
            case 10:
            case 11:
                echo "Осінь";
                break;
            default:
                echo "Некоректний місяць";
        }
    }

    function _22_Task($value)
    {
        if (($value % 4 == 0 && $value % 100 != 0) || ($value % 400 == 0)) {
            echo "Так, високосний";
        } else {
            echo "Ні, не високосний";
        }
    }

    function _23_Task($value)
    {
        echo ($value[0] === 'a') ? "так" : "ні";
    }

    function _24_Task($value)
    {
        echo (in_array($value[0], ['1', '2', '3'])) ? "так" : "ні";
    }

    function _25_Task($value)
    {
        echo $value[0] + $value[1] + $value[2];
    }

    function _26_Task($value)
    {
        $firstHalf = $value[0] + $value[1] + $value[2];
        $secondHalf = $value[3] + $value[4] + $value[5];
        echo ($firstHalf == $secondHalf) ? "так" : "ні";
    }

    function checkValue($function, $value)
    {
        echo "<strong>$function(" . var_dump($value) ."):</strong> ";
        $function($value);
        echo "<br>";
    }

    $testCases = [
        '_1_Task' => [1, 0, -3],
        '_2_Task' => [1, 0, -3],
        '_3_Task' => [1, 0, -3],
        '_4_Task' => [1, 0, -3],
        '_5_Task' => [1, 0, -3],
        '_6_Task' => [1, 0, -3],
        '_7_Task' => ["test", "тест", 3],
        '_8_Task' => ['1', 1, 3],
        '_9_Task' => [1, 3, -3, 0, null, true, '', '0'],
        '_10_Task' => [1, 3, -3, 0, null, true, '', '0'],
        '_11_Task' => [3, null],
        '_12_Task' => [3, null],
        '_13_Task' => [true, false],
        '_14_Task' => [true, false],
        '_15_Task' => [5, 0, -3, 2],
        '_16_Task' => [5, 0, -3, 2],
        '_17_Task' => [[1, 3], [0, 6], [3, 5]],
        '_18_Task' => [[3, 5], [7, 10], [2, 15]],
        '_19_Task' => [1, 2, 3, 4, 5],
        '_20_Task' => [5, 15, 25, 32],
        '_21_Task' => [1, 4, 7, 10, 13],
        '_22_Task' => [1700, 1800, 1900, 2000, 2024],
        '_23_Task' => ['abcde', 'bcdea'],
        '_24_Task' => ['12345', '67890'],
        '_25_Task' => ['123', '456', '789'],
        '_26_Task' => ['123321', '456789']
    ];

    foreach ($testCases as $function => $values) {
        foreach ($values as $value) {
                checkValue($function, $value);
            }
        
        echo "<br />";
    }
    ?>
</body>

</html>
