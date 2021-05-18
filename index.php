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
<h1>Check Symmetry of a string</h1>
<form method="get">
    <table>
        <tr
            <th>Input string:</th>
        <td><input type="text" name ="input"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Check"></td>
        </tr>
    </table>
    <h1>Result</h1>
</form>
<?php
include_once "Stack.php";
include_once "Queue.php";
include_once "Element.php";

$stack = new Stack();
$queue = new Queue();

if($_SERVER["REQUEST_METHOD"]=="GET"){
    $string = $_GET["input"];
    $count = 0;
    for ($i = 0;$i < strlen($string);$i++){
        $stack->push($string[$i]);
        $queue->enqueue($string[$i]);
    }
    for($i = 0;$i<strlen($string);$i++){
        if($stack->pop() === $queue->dequeue()){
            $count++;
        }
    }

    if($count === strlen($string)){
        echo "The string is symmetry";
    } else {
        echo "The string is not symmetry";
    }
}
echo strlen($string);


?>

</body>
</html>
