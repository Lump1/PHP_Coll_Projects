<?php

include("pageTemplate.php");

// if(count($_POST) == 0 && count($_GET) == 0) { 
    
// }

function clearTags($message) {
    return str_replace("#", "", $message);
}
function checkIfDataCorrect($data, $loginPassKVP): bool {
    if(!isset($data["pass"]) || !isset($data["login"]) || !isset($loginPassKVP["pass"])|| !isset($loginPassKVP["login"])) {
        echo '!isset($data["pass"]) || !isset($data["login"]) || !isset($loginPassKVP["pass"])|| !isset($loginPassKVP["login"])';
        return false;
    }

    if($data["login"] == $loginPassKVP["login"] && $data["pass"] == $loginPassKVP["pass"]) {
        return true;
    }

    return false;
}   

function getDataFromFile($path) {
    return require($path);
}


if(true) {
    echo "<strong>Task 1</strong> <br/> Привіт, Олексій! <br/>";
}

if(isset($_POST["Task2_name"])) {
    addToBody("Привіт, " . clearTags($_POST["Task2_name"]));
}

if(isset($_POST["Task2_age"])) {
    addToBody(", " . clearTags($_POST["Task2_age"]) . " років" . "<br/>");
}

if(isset($_POST["Task2_message"])) {
    addToBody("Твоє повідомлення: " . clearTags($_POST["Task2_message"]) . "<br/>");
}

if(!isset($_GET["Task3_age"])) {
    $task3_Form = <<<HTML
            <br />
            <br />
            <strong>Task 3</strong>

            <form method="GET" action="index.php">
                Введіть ваш вік: <input type="number" name="Task3_age"><br>
                <input type="submit">
            </form>
    HTML;
    
    addToBody($task3_Form);
} else {
    addToBody(clearTags($_GET["Task3_age"]));
}


$task4_Form = <<<HTML
            <br />
            <br />
            <strong>Task 4</strong>

            <form method="POST" action="index.php">
                Login: <input type="text" name="Task4_login"><br>
                Password: <input type="password" name="Task4_pass"><br>
                <input type="submit">
            </form>
    HTML;
    
addToBody($task4_Form);

if(isset($_POST["Task4_login"]) && isset($_POST["Task4_pass"])) {
    $data = ["pass" => $_POST["Task4_pass"], "login"=> $_POST["Task4_login"]];

    // var_dump($data);

    if(checkIfDataCorrect($data, getDataFromFile("data.php")[0])) {
        addToBody("<p>Доступ дозволено!</p>");
    } else { 
        addToBody("<p>Доступ не дозволено!</p>");
    }
}


$task5_Form = <<<HTML
            <br />
            <br />
            <strong>Task 5</strong>

            <form method="GET" action="index.php">
                Name: <input type="text" name="Task5_name" /><br>
                <input type="submit">
            </form>
    HTML;
    
addToBody($task5_Form);

if(isset($_GET["Task5_name"])) {
    $name = $_GET["Task5_name"];

    $search = <<<HTML
            <input type="text" name="Task5_name" />
    HTML;

    edithHtml($search, $name);  
}


$task6_Form = <<<HTML
            <br />
            <br />
            <strong>Task 6</strong>

            <form method="POST" action="index.php">
                Name: <input type="text" name="Task6_name" /><br>
                <textarea name="Task6_message"></textarea><br>
                <input type="submit">
            </form>
    HTML;
    
addToBody($task6_Form);

if(isset($_POST["Task6_name"])) {
    $name = $_POST["Task6_name"];

    $search = <<<HTML
            <input type="text" name="Task6_name" />
    HTML;

    edithHtml($search, $name);  
}

if(isset($_POST["Task6_message"])) {
    $message = $_POST["Task6_message"];

    $search = <<<HTML
             <textarea name="Task6_message">
    HTML;

    edithHtml($search, $message);  
}



// $tasksCases = [
//     "Task 2" => [
//         '<input type="text" name="Task2_name">', 
//         '<input type="number" name="Task2_age">', 
//         '<textarea name="Task2_message"></textarea>'
//     ],
//     "Task 3" => [
//         '<input type="text" name="Task2_name">', 
//         '<input type="number" name="Task2_age">'
//     ],
    
// ];

echo getTemplateWithBodyFilled();