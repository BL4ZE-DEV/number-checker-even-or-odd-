<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action=" <?php echo $_SERVER['PHP_SELF']?>">
 <br>
  Please input number to verify if number is even or odd : <input type="text" name = "number">
 <input type = "submit"> 
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];



    if( $number % 2 === 0 ){
       print "your number is even" ."<br>";
    }
    else{
        print "your number is odd";
    }



}
