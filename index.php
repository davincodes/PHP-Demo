<?php
session_start();
    //SUPERGLOBALS - it is build in its pre-defined.

    $_SESSION = array( //to save the state of browser activity. //temporary way to store data in br
    "firstname" => "John",
    "lastname" => "Doe",
    "age" => "19"
    );
    $todos = array(
        "Wash Dishes",
        "Cook foods",
        "Study and code",
        "Water the plants"
    );


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main class="container m-5 p-5 border rounded shadow">
        <h1 class="fw-bold"> 💻 To-do List</h1>
        <p>
            <?php
                var_dump($_SESSION)
            ?>
        </p>
            <ol>
                <?php
                    foreach($todos as $todo){
                        echo "<li>".$todo."</li>"; // . is + in JS
                    }
                ?>
            </ol>
    </main>
</body>
</html>