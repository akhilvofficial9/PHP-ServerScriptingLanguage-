<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function test(){
        $x = 5; //local scope  ; declared inside the function
        echo "<p> Variable x inside function is: $x</p>";
    }
    test();
    // using x outside the function will generate an error
     echo "<p> Variable x outside function is: $x</p>";
    ?>
</body>
</html>