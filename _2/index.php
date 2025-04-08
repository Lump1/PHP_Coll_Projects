<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://localhost/devel/favicon.ico" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 90dvh;
            background-color: rgb(16, 15, 15);
        }

        div {
            border-radius: 15px;
            background-color: rgb(40, 39, 38);
            padding: 10px 20px 50px 20px;
            color: rgb(206, 205, 195);
        }

        h1 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 96px;
        }

        a {
            background-color: rgba(160, 175, 84, 0.42);
            border-radius: 5px;
            padding: 1px 3px;
            text-decoration: none;
            color: rgb(135, 154, 57);
        }

        li {
            padding: 3px 0;
        }

        *:not(h1) {
            font-size: 20px;
        }

        .backdrop {
            position: absolute;
            top: 10px;
            left: 20px;
            color: rgb(28, 27, 26);
            font-size: 128px;
            font-family: 'Courier New', Courier, monospace;
            user-select: none;
            z-index: -1;
        }
    </style>
</head>

<body>
    <h1 class="backdrop">丫 (๑°□°๑)丫</h1>

    <div>
        <h1>PHP Tasks</h1>
        <ol>
            <li><a href="/devel/first">Variables in PHP</a></li>
            <li><a href="/devel/second">PHP arrays, array methods</a></li>
        </ol>
    </div>
</body>

</html>