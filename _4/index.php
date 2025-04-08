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

        function _1_Task($array) {
            $result = "";
            foreach ($array as $value) {
                $result .= "<br/>" . $value;
            }

            echo $result;
        }

        function _2_Task($array) {
            $result = 0;
            foreach ($array as $value) {
                $result += $value;
            }

            echo $result;
        }

        function _3_Task($array) {
            $result = 0;
            foreach ($array as $value) {
                $result += $value * $value;
            }

            echo $result;
        }

        function _4_Task($array) {
            $result = "";

            foreach ($array as $key => $value) {
                $result .= "<br/>" . $key . " - " . $value;
            }

            echo $result;
        }
        function _5_Task($array) {
            $result = "";

            foreach ($array as $key => $value) {
                $result .= "<br/>" . $key . " - зарплата " . $value . " доларів";
            }

            echo $result;
        }

        function _6_Task($array) {
            $start = $array["start"];
            $end = $array["end"];

            echo "<br/> for: ";
            for($i = $start; $i <= $end; $i++) {
                echo $i . ", ";
            }
            echo "<br/> while: ";
            $index = $start;
            while( $index <= $end ) {
                echo $index . ", ";
                $index++;
            }
        }

        function _7_Task($array) {
            _6_Task($array);
        }

        function _8_Task($array) {
            $start = $array["start"];
            $end = $array["end"];

            echo "<br/> for: ";
            for($i = $start; $i <= $end ? ($i % 2 == 0 ? $i : $i++) : false; $i++) {
                echo $i . ", ";
            }
            echo "<br/> while: ";
            $index = $start;
            while( $index <= $end ) {
                if($index % 2 != 0) {
                    $index++;
                }
                echo $index . ", ";
                $index++;
            }
        }

        function _9_Task($array) {
            $start = $array["start"];
            $end = $array["end"];

            echo "<br/> for: ";
            $result = 0;
            for($i = $start; $i <= $end; $i++) {
                $result += $i;
            }

            echo $result;
            
            echo "<br/> while: ";
            $result = 0;
            $index = $start;
            while( $index <= $end ) {
                $result += $index;
                $index++;
            }

            echo $result;

        }

        function _10_Task($array) {
            $result = "";
            foreach($array as $value) {
                if($value > 3 && $value < 10) {
                    $result .= "<br /> " . $value;
                }
            }

            echo $result;
        }

        function _11_Task($array) {
            $result = 0;
            foreach($array as $value) {
                if($value > 0) {
                    $result += $value;
                }
            }

            echo $result;
        } //[ '10', '20', '30', '50', '235', '3000']

        function _12_Task($array) {
            foreach($array as $value) {
                if($value == 4) {
                    echo "Є!";
                    break;
                }
            }
        }

        function _13_Task($array) {
            $numberArray = $array['numberArray'];
            $exceptionNumberArray = $array['exceptionNumberArray'];
            foreach($numberArray as $value) {
                if(in_array($value[0], haystack: $exceptionNumberArray)) {
                    echo $value . ", ";
                }
            }
        }

        function _14_Task($array) {
            $result = "-";

            foreach($array as $value) {
                $result .= $value . "-";
            }

            echo $result;
        }

        function _15_Task($array) {
            foreach($array as $value) {
                if($value == "Saturday" || $value == "Sunday") {
                    echo " <b>" . $value ."</b>";
                }
                else {
                    echo ' ' . $value;
                }
            }
        }

        function _16_Task($array) {
            $day = date('l');

            foreach($array as $value) {
                if($value == $day) {
                    echo " <i>" . $value ."</i>";
                }
                else {
                    echo ' ' . $value;
                }
            }
        }

        function _17_Task($array) {
            $start = $array["start"];
            $end = $array["end"];

            $result = [];
            for($i = $start; $i <= $end; $i++) {
                $result[] = $i;
            }

            arrayOut($result);
        }

        function _18_Task($array) {
            $en = [];
            $ua = [];

            foreach($array as $key => $value) {
                $en[] = $key;
                $ua[] = $value;
            }

            echo "<br />En: ";
            arrayOut($en);
            echo "<br />Ua: ";
            arrayOut($ua);
        }

        function _19_Task($array) {
            $num = $array["number"];
            $endNumber = $array["endNumber"];
            $divide = $array["divide"];

            echo "<br/> for: ";
            $result = 0;
            for($i = $num; $i > $endNumber; $i /= $divide) {
                $result++;
            }

            echo "Itterations count: " . $result;
            
            echo "<br/> while: ";
            $result = 0;
            $index = $num;
            while( $index > $endNumber ) {
                $result++;
                $index /= 2;
            }

            echo "Itterations count: " . $result;

        }
    
        function checkValue($function, $value)
        {
            echo "<div>";
            echo "<strong>$function(" . var_dump($value) ."):</strong> ";
            $function($value);
            echo "<br>";
            echo "</div>";
        }

        function arrayOut($array) {
            for($i = 0; $i < count($array); $i++) {
                echo $array[$i] . ", ";
            }
        }

        $testCases = [
            '_1_Task' => [['html', 'css', 'php', 'js', 'jq']],
            '_2_Task' => [[1, 2, 3, 4, 5]],
            '_3_Task' => [[1, 2, 3, 4, 5]],
            '_4_Task' => [[ 'green' => 'зелений', 'red' => 'червоний', 'blue' => 'блакитний']],
            '_5_Task' => [[ 'Коля' => 200, 'Вася' => 300, 'Петя' => 400]],
            '_6_Task' => [[ 'start' => 1, 'end' => 100]],
            '_7_Task' => [[ 'start' => 11, 'end' => 33]],
            '_8_Task' => [[ 'start' => 1, 'end' => 100]],
            '_9_Task' => [[ 'start' => 1, 'end' => 100]],
            '_10_Task' => [[2, 5, 9, 15, 0, 4]],
            '_11_Task' => [[2, 5, -9, 15, 0, -4]],  
            '_12_Task' => [[1, 2, 5, 9, 4, 13, 4, 10]],  
            '_13_Task' => [[ 'numberArray' => ['10', '20', '30', '50', '235', '3000'], 'exceptionNumberArray' => ['1', '2', '5']]],  
            '_14_Task' => [[1, 2, 3, 4, 5, 6, 7, 8, 9]],  
            '_15_Task' => [["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]],  
            '_16_Task' => [["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]],  
            '_17_Task' => [[ 'start' => 1, 'end' => 100]],
            '_18_Task' => [[ 'green' => 'зелений', 'red' => 'червоний', 'blue' => 'блакитний']],
            '_19_Task' => [[ 'number' => 1000, 'divide' => 2, 'endNumber' => 50]]
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