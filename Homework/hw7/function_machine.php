
<?php
 function addtwo($a = 0, $b = 0)
 {
 return ($a + $b);
 }
 $value1 = $_POST['val1'];
 $value2 = $_POST['val2'];
?>
<html>

 <title>PHP - Add two numbers</title>
 <body>
 <form action="function_machine.php" method="post">
 <input type="text" name="val1" value="0" />
 <input type="text" name="val2" value="0" />
 <input type="submit" value="Calculate values"/>
 </form>

 <?php
 echo $value1 . " + " . $value2 . " = ";
 echo addtwo($value1+$value2);
 ?>
 </body>
</html>