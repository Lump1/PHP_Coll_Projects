<?php

$template = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      form {
        display: flex;
        flex-direction: column;
        flex: end;
        max-width: 250px;
      }  
    </style>
</head>
<body>
    <br/>
    <br/>
    <strong>Task 2</strong>
    <form method="POST" action="index.php">
        Name: <input type="text" name="Task2_name"><br>
        Age: <input type="number" name="Task2_age"><br>
        <textarea name="Task2_message"></textarea><br>
        <input type="submit">
    </form>

    {body}
</body>
</html>
HTML;

function getTemplateWithBodyFilled($body = "") {
    global $template;

    $template = str_replace("{body}", $body, $template);
    return $template;
}

function addToBody($data) {
    global $template;

    $template = str_replace("</body>", $data . "</body>", $template);
}

function edithHtml($search, $innerHtml) {
    global $template;

    preg_match('/<(\w+)/', $search, $matches);

    if(!isset($matches[1])) {
        return null;
    }
    else if($matches[1] == "input") {
        preg_match('/<input[^>\/]*/', $search, $matches2);
        $template = str_replace($matches2[0], $matches2[0] . "value='" . $innerHtml . "'", $template);
    } else {
        $template = str_replace($search, $search . "" . $innerHtml, $template);
    }
}

function generateForm($method, $action, $inputs) {
    $inputStrings = buildHtmlStringFromArray($inputs);

    $form = <<<HTML
        <form method="{$method}" action="{$action}">
            {$inputStrings}
        </form>
    HTML;

    return $form;
}

function buildHtmlStringFromArray($array) {
    return implode('<br/>', $array);
}