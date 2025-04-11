<?php 
    function buildPage($bodyFilling) {
        echo `
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Document</title>
                </head>
                <body>
                    {$bodyFilling}
                </body>
            </html>
        `;
    }

    function buildTable($array) {
        $table = "";
        
        $headers = [];
        foreach ($array as $key => $value) {
            $headers[] = is_string($key) ? $key : (string)$key;
        }

        $table .= "<table border='1' cellpadding='5' cellspacing='0'>";

        $table .=  "<tr>";
        foreach ($headers as $header) {
            $table .=  "<th>{$header}</th>";
        }
        $table .=  "</tr>";

        $maxRows = 0;
        foreach ($array as $item) {
            $maxRows = max($maxRows, count($item));
        }

        for ($i = 0; $i < $maxRows; $i++) {
            $table .=  "<tr>";
            foreach ($array as $item) {
                $table .=  "<td>" . (isset($item[$i]) ? $item[$i] : '') . "</td>";
            }
            $table .=  "</tr>";
        }

        $table .=  "</table>";

        echo $table;
    }

    function isSimple(int $number): bool {
        for( $dividend = $number - 1; $dividend != 1; $dividend-- ) {
            if($number % $dividend == 0) return false;
        }

        return true;
    }

    function checkValue($function, $value)
    {
        echo "<div>";
        echo "<strong>$function(" . var_dump($value) ."):</strong> ";

        $result = $function($value);
        if(!is_null($result)) {
            var_dump($result);
        }

        echo "<br>";
        echo "</div>";
    }



    function buildBody() {
        $body = "";
        $data = require 'data.php';
        buildTable($data[0]);
        $testCases = [
            'isSimple' => [2, 100, 97, 23, 5, 4],
        ];

        foreach ($testCases as $function => $values) {
            foreach ($values as $value) {
                checkValue($function, $value);
            }
            echo "<br />";
        }
        
    }

    buildPage(buildBody());
?>