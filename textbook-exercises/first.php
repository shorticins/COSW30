<!Doctype html>
<html lang="en">
<head>
    <title>PHP Practice</title>
    <meta charset="utf-8">
</head>

<body>
<!-- Script 1.2 - first.php -->

<p>This is a standard html paragraph.</p>


<?php

 echo 'Some PHP predefined variables';

 $file = $_SERVER['SCRIPT_FILENAME'];
 $user = $_SERVER['HTTP_USER_AGENT'];
 $server = $_SERVER['SERVER_SOFTWARE'];

 echo "<p>You are running the file <br> <strong>$file</strong></p>\n";
 echo "<p>You are viewing the page using <br><strong>$user</strong></p>\n";
 echo "<p>This server is running <br><strong>$server</strong></p>\n";

 echo "This was generated using PHP";

 echo "test";
?>

</body>

</html>