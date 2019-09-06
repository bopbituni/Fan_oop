<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <button name="button1">TrạngThái</button>
    <button name="button2">Kênh1</button>
    <button name="button3">Kênh2</button>
    <button name="button4">Kênh3</button>

</form>
<?php
include "Fan.php";
include "Remote.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $button1 = $_POST["button1"];
//    $button2 = $_POST["button2"];
//    $button3 = $_POST["button3"];
//    $button4 = $_POST["button4"];

    $fan1 = new Fan(3, 'blue', 10, true);
    $fan2 = new Fan(2, 'red', 5, true);
    $remote = new Remote();
    echo $remote->boolen($fan1);
    echo $remote->swapSpeed($fan2,1);
    echo"<br>";
    echo $remote->boolen($fan2);
    echo $remote->swapSpeed($fan1,3);
    // echo $remote->boolen($fan2);
}
?>

</body>
</html>

