<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function _1_Task($array){
            $a = $array[0];
            $b = $array[1];

            echo $a % $b;
        }
        function _2_Task($array){
            $a = $array[0];
            $b = $array[1];
            $c = $a % $b;
            echo ($c != 0 ? "Ділиться з залишком" : "Ділиться") . "\r\t" . $a . "%" . $b . "=" . $c; 
        }
        function _3_Task($array){
            $st = pow($array[0], $array[1]);
            echo $st; 
        }
        function _4_Task($array){
            $st = pow($array[0], 1 / $array[1]);
            echo $st; 
        }
        function _5_Task($array){
            $num = 0;
            foreach ($array as $key => $value) {
                $num += pow($value, 2);
            }

            echo sqrt($num); 
        }
        function _6_Task($value){
            $num = [round(sqrt($value)), round(sqrt($value), 1), round(sqrt($value), 2)];

            for( $i = 0; $i < count($num); $i++ ) {
                echo $num[$i] . ", ";
            }
        }
        function _7_Task($value){
            $num = [
                "floor" => floor(sqrt($value)), 
                "ceil" => ceil(sqrt($value))
            ];

            foreach ($num as $key => $value) {
                echo "<br/>" . $key . ": " . $value;
            }
        }
        function _8_Task($array){
            $min = min($array);
            $max = max($array);

            echo "<br/>" . "Min: " . $min . "<br/>" . "Max: " . $max; 
        }
        function _9_Task($array){
            $num = mt_rand($array[0], $array[1]);

            echo $num; 
        }
        function _10_Task($array){
            $numArray = [];
            for($i = 0; $i < 10; $i++) {
                array_push($numArray, mt_rand($array[0], $array[1]));
            }

            for($i = 0; $i < 10; $i++) {
                echo $numArray[$i] . ", ";
            }
        }
        function _11_Task($array){
            echo abs($array[0] -  $array[1]) . ", ";
        }
        function _12_Task($array){
            for( $i = 0; $i < count($array); $i++) {
                $array[$i] = abs($array[$i]);
            }

            for($i = 0; $i < count($array); $i++) {
                echo $array[$i] . ", ";
            }
        }
        function _13_Task($value) {
            $tempNum = 1;
            $tempArr = [];
            while( $value >= $tempNum) {
                if($value % $tempNum == 0) {
                    array_push($tempArr, $tempNum);
                }

                $tempNum++;
            }

            for($i = 0; $i < count($tempArr); $i++) {
                echo $tempArr[$i] . ", ";
            }
        }
        function _14_Task($array){
            $tempNum = 0;
            for($i = 0; $i < count($array); $i++) {
                $tempNum += $array[$i];
                if(10 < $tempNum) {
                    echo $i + 1;
                    return;
                }
            }

            echo "There is not enough nummbers";
        }

        function checkValue($function, $value)
        {
            echo "<strong>$function(" . var_dump($value) ."):</strong> ";
            $function($value);
            echo "<br>";
        }

        $testCases = [
            '_1_Task' => [[10, 3]],
            '_2_Task' => [[10, 3]],
            '_3_Task' => [[2, 10]],
            '_4_Task' => [[245, 2]],
            '_5_Task' => [[4, 2, 5, 19, 13, 0, 10]],
            '_6_Task' => [379],
            '_7_Task' => [587],
            '_8_Task' => [[4, -2, 5, 19, -130, 0, 10]],
            '_9_Task' => [[1, 100]],
            '_10_Task' => [[1, 100]],
            '_11_Task' => [[5, 10], [12, 3], [4, 4], [15, 13], [6, 7]],
            '_12_Task' => [[1, 2, -1, -2, 3, -3]],
            '_13_Task' => [30, 15],
            '_14_Task' => [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10], [5, -3, 2], [5, 5, 1, 10]],
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