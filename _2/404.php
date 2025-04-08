<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://localhost/devel/favicon.ico" />
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
            padding: 20px 0;
            margin: 0;
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
            font-size: 24px;
        }

        .not-found {
            width: fit-content;
            padding: 15px 20px;
        }

        .backdrop {
            position: absolute;
            top: 10px;
            left: 20px;
            color: rgb(28, 27, 26);
            font-size: 128px;
            font-family: 'Courier New', Courier, monospace;
            user-select: none;
        }
    </style>
</head>

<body>
    <h1 class="backdrop">(｡◎⁭ᯅ◎)</h1>
    <div class="not-found">
        <h1>404 【・_・?】</h1>
        <p>Not found</p>
        <a href="/devel">Go back</a>
    </div>
</body>

</html>