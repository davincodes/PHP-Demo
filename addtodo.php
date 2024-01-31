<?php

include 'dbconn.php';

echo $_POST["newtodo"];

$sql = "INSERT INTO todos (content, status) VALUES ('".$_POST["newtodo"]."', 'Pending');";

$conn -> query($sql);

header("location: index.php")

?>

