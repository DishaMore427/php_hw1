<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name:
        <input type="text" name="name"><br>
        Number:
        <input type="text" name="number"><br>
        <select name="car" id="">
            <option value="Ford">Ford</option>
            <option value="Tesla">Tesla</option>
            <option value="Toyota">Toyota</option>
            <option value="Scorpio">Scorpio</option>
            <option value="Defender">Defender</option>
        </select>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']==="POST") {
    # code...
    $name=$_POST['name'];
    $number=$_POST['number'];
    $car=$_POST['car'];

    echo "Hello,$name. Your phone no is $number and your preffred car brand is $car.";
}
?>