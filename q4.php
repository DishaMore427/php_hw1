<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Name:
        <input type="text" name="name"><br>
        Password:
        <input type="text" name="pass"><br>
        <input type="checkbox" name="checkbox" id="" value="Agreed"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']==="GET") {
    # code...
    $name=$_GET['name'];
    $pass=$_GET['pass'];
    $chekb=$_GET['checkbox'];

    echo "Welcome $name. You have $chekb To the Terms and Conditions.";
}
?>