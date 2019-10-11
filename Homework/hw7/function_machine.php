<?php
 function addthree($a = 0, $b = 0, $c = 0)
 {
 return ($a + $b + $c);
 }

 $value1 = $_POST['val1'];
 $value2 = $_POST['val2'];
 $value3 = $_POST['val'];
 $random = rand(1,1000)
?>

<html>
<head>
<meta charset="utf-8">
 <title>PHP - Function Machine</title>
 <style>
body{
    background-image: url("gears.gif");
 background-color: #cccccc;
 background repeat: no-repeat;
 background-size: cover;
 margin: 0;
 padding: 0;
 font-size: 25px;
}
header{
    margin: 0;
    padding: 50px 0;
    background-color: cornflowerblue;
}
h1 {
    text-align: center;
}

  #form-outer {
  background-color: rgb(250, 250, 250);
  margin: 75px auto;
  border: 5px groove cornflowerblue;
  border-radius: 4px;
  width: 75%;
  max-width: 900px;
  padding: 10px;
  padding-top: 15px;
}
form{
    width: 50%;
    margin: auto;
}
h2{
    text-align: center;
}
p{
    color: #000;
    font-weight: 8;
    text-align:center;
}
 </style>
 </head>

 <body>
 <header>
<h1>Function Machine</h1>
 </header>


 <div id="form-outer">
  <h2>Enter 3  Numbers To Be Calculated</h2>
  <p>(hint:each form operates independent of each other. Once calculations are complete, you can enter new numbers to calculate)</p>
 <form action="function_machine.php" method="post">
 <input type="text" name="val1" value="0" placeholder=""/>
 <input type="text" name="val2" value="0" placeholder=""/>
 <input type="text" name="val" value="0" placeholder="">
 <input type="submit" value="Add"/>
 </form>
<div>

 <?php
 echo "<p>Sum of your numbers + a random number:</p>";
echo "<p>" . $value1 . '+'. $value2 . '+' . $value3 . '+' . $random . '=' . addthree($value1+$value2+$value3+$random) . "</p>";
 echo "<p>" . 'Square root of your answer = ' . sqrt(addthree($value1+$value2+$value3+$random)) . "<p/>";
 echo "<p>Enter new numbers for a different result."
 ?>
<?php
 function bcmul($value1, $value2){

 return ($value1 * $value2);
 }
 $value1 = $_POST['val3'];
 $value2 = $_POST['val4'];
?>
 <div id="form-outer">
 <h2>Enter 2 Numbers to be calculated</h2>
 <form action="function_machine.php" method="post">
 <input type="text" name="val3" value="" placeholder="0"/>
 <input type="text" name="val4" value="" placeholder="0"/>
 <input type="submit" value="Multiply"/>
  <?php

echo "<p>" . 'Answer:' . $value1 . 'x'. $value2 . '=' . bcmul($value1, $value2) . "</p>";
echo "<p>" . 'Square root of you answer = ' . sqrt(bcmul($value1, $value2)) . "</p>";
echo "<p>Enter new numbers for a different result."
 ?>
 </form>
<div>
 </body>
</html>