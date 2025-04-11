<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        function _1_Task($params) { 
            echo strtoupper($params); 
        }
        function _2_Task($params) { 
            echo strtolower($params); 
        }
        function _3_Task($params) { 
            echo ucfirst($params); 
        }
        function _4_Task($params) { 
            echo lcfirst($params); 
        }
        function _5_Task($params) { 
            echo ucwords($params); 
        }
        function _6_Task($params) { 
            echo ucfirst(strtolower($params)); 
        }
        function _7_Task($params) { 
            echo strlen($params); 
        }
        function _8_Task($params) {
            $len = strlen($params);
            echo ($len > 5 && $len < 10) ? "Пароль підходить" : "Придумайте інший пароль";
        }
        function _9_Task($params) {
            echo substr($params, 0, 4) . ", " . substr($params, 5, 3) . ", " . substr($params, 9, 3);
        }
        function _10_Task($params) { 
            echo substr($params, -3); 
        }
        function _11_Task($params) { 
            echo (strpos($params, 'http://') === 0) ? "так" : "ні"; 
        }
        function _12_Task($params) {
            echo (strpos($params, 'http://') === 0 || strpos($params, 'https://') === 0) ? "так" : "ні";
        }
        function _13_Task($params) { 
            echo (substr($params, -4) === '.png') ? "так" : "ні"; 
        }
        function _14_Task($params) {
            echo (preg_match('/\.(png|jpg)$/', $params)) ? "так" : "ні";
        }
        function _15_Task($params) {
            echo (strlen($params) > 5) ? substr($params, 0, 5) . "..." : $params;
        }
        function _16_Task($params) { 
            echo str_replace('.', '-', $params); 
        }
        function _17_Task($params) {
            echo str_replace(['a', 'b', 'c'], ['1', '2', '3'], $params);
        }
        function _18_Task($params) {
            echo preg_replace('/[0-9]/', '', $params);
        }
        function _19_Task($params) {
            echo strtr($params, ['a' => '1', 'b' => '2', 'c' => '3']);
        }
        function _20_Task($params) {
            echo strtr($params, 'abc', '123');
        }
        function _21_Task($params) {
            echo substr_replace($params, '!!!', 3, 5);
        }
        function _22_Task($params) { 
            echo strpos($params, 'b'); 
        }
        function _23_Task($params) { 
            echo strrpos($params, 'b'); 
        }
        function _24_Task($params) { 
            echo strpos($params, 'b', 3); 
        }
        function _25_Task($params) { 
            echo strpos($params, ' ', strpos($params, ' ') + 1); 
        }
        function _26_Task($params) { 
            echo strpos($params, '..') !== false ? "є" : "ні"; 
        }
        function _27_Task($params) { 
            echo (strpos($params, 'http://') === 0) ? "так" : "ні"; 
        }
        function _28_Task($params) {
            print_r(explode(' ', $params));
        }
        function _29_Task($params) {
            echo implode(', ', $params);
        }
        function _30_Task($params) {
            $parts = explode('-', $params);
            echo "$parts[2].$parts[1].$parts[0]";
        }
        function _31_Task($params) {
            print_r(str_split($params, 2));
        }
        function _32_Task($params) {
            print_r(str_split($params));
        }
        function _33_Task($params) {
            echo implode('-', str_split($params, 2));
        }
        function _34_Task($params) { 
            echo rtrim($params); 
        }
        function _35_Task($params) { 
            echo trim($params, '/'); 
        }
        function _36_Task($params) { 
            echo rtrim($params, '.') . '.'; 
        }
        function _37_Task($params) { 
            echo strrev($params); 
        }
        function _38_Task($params) {
            echo ($params === strrev($params)) ? "паліндром" : "не паліндром";
        }
        function _39_Task($params) { 
            echo str_shuffle($params); 
        }
        function _40_Task($params) {
            echo substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 6);
        }
        function _41_Task($params) {
            echo number_format($params, 0, '', ' ');
        }
        function _42_Task($params) {
            for ($i = 0; $i <= $params; $i++) echo str_repeat('x', $i) . "<br>";
        }
        function _43_Task($params) {
            for ($i = 0; $i <= $params; $i++) echo str_repeat((string)$i, $i) . "<br>";
        }
        function _44_Task($params) { 
            echo strip_tags($params); 
        }
        function _45_Task($params) { 
            echo strip_tags($params, '<b><i>'); 
        }
        function _46_Task($params) { 
            echo htmlspecialchars($params); 
        }
        function _47_Task($params) {
            echo lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $params))));
        }
        function _48_Task($params) {
            foreach ($params as $num) {
                if (strpos((string)$num, '3') !== false) {
                    echo $num . ' ';
                }
            }
        }

        function checkValue($function, $value)
        {
            echo "<div>";
            echo "<strong>$function(" . var_dump($value) ."):</strong> ";
            $function($value);
            echo "<br>";
            echo "</div>";
        }

        $testCases = [
            '_1_Task' => ['php'],
            '_2_Task' => ['PHP'],
            '_3_Task' => ['london'],
            '_4_Task' => ['London'],
            '_5_Task' => ['london is the capital of great britain'],
            '_6_Task' => ['LONDON'],
            '_7_Task' => ['html css php'],
            '_8_Task' => ['qwerty', '1234', '1234567890'],
            '_9_Task' => ['html css php'],
            '_10_Task' => ['html css php'],
            '_11_Task' => ['http://example.com', 'https://example.com'],
            '_12_Task' => ['http://site.com', 'https://site.com', 'ftp://site.com'],
            '_13_Task' => ['image.png', 'image.jpg'],
            '_14_Task' => ['photo.jpg', 'photo.png', 'photo.bmp'],
            '_15_Task' => ['abcdef', 'hi'],
            '_16_Task' => ['31.12.2013'],
            '_17_Task' => ['abc abc abc'],
            '_18_Task' => ['1a2b3c4b5d6e7f8g9h0'],
            '_19_Task' => ['abcabcabc'],
            '_20_Task' => ['abcabcabc'],
            '_21_Task' => ['abcdefghijk'],
            '_22_Task' => ['abc abc abc'],
            '_23_Task' => ['abc abc abc'],
            '_24_Task' => ['abc abc abc'],
            '_25_Task' => ['aaa aaa aaa aaa aaa'],
            '_26_Task' => ['test..test'],
            '_27_Task' => ['http://site.com', 'https://site.com'],
            '_28_Task' => ['html css php'],
            '_29_Task' => [['html', 'css', 'php']],
            '_30_Task' => ['2020-12-31'],
            '_31_Task' => ['1234567890'],
            '_32_Task' => ['1234567890'],
            '_33_Task' => ['1234567890'],
            '_34_Task' => ['   test string   '],
            '_35_Task' => ['/php/'],
            '_36_Task' => ['слова слова слова', 'слова слова слова.'],
            '_37_Task' => ['12345'],
            '_38_Task' => ['madam', 'hello'],
            '_39_Task' => ['abcdefg'],
            '_40_Task' => [''],
            '_41_Task' => ['12345678'],
            '_42_Task' => [9],
            '_43_Task' => [9],
            '_44_Task' => ['html, <b> php </b>, js'],
            '_45_Task' => ['<b>bold</b> <i>italic</i> <u>underline</u>'],
            '_46_Task' => ['html, <b> php </b>, js'],
            '_47_Task' => ['var_test_text'],
            '_48_Task' => [[13, 25, 36, 93, 42, 51]],
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