<!Doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Array Outputs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Raleway|Turret+Road&display=swap" rel="stylesheet">

        <style>
            body{
                padding: 0;
                margin: 0;
                font-family: 'Raleway', sans-serif;
                text-align: center;
            }
            header{
                background-color: skyblue;
                padding: 60px 0;
                text-align: center;
                margin:0 0 20px 0;
            }
            h1{
                font-family: 'Turret Road', cursive;
                font-size: 50px;
            }
        </style>

    </head>

    <body>
 <header>
          <h1> Fun with Arrays</h1>
        </header>

<?php
$quote = $_POST['text'];
$quote_explode = explode(' ', $quote);





if(!empty($quote)) {
    echo "<h2>Your original list is:</h2>";

    foreach($quote_explode as $value) {

    echo "<p>$value</p>";
}
     echo "<p><strong>The total word count of your list is:</strong></p>";

     echo "<p>" . count($quote_explode) . "</p>";

     echo "<br>";

     echo "<h2>Your list in alphabetical order is:</h2> <br>";

     sort($quote_explode);

      foreach($quote_explode as $key => $value) {

   echo "<p>$value</p>";
      }
   echo "<br>";


   echo "<h2>Your list in reverse alphabetical order is:</h2>";

   rsort($quote_explode);

   foreach($quote_explode as $key => $value){
       echo "<p>$value</p>";
   }
   echo "br";
   //add words to array
   "<h2>Your list with three words added is:</h2>";
  $quote_explode[] = "Because";
  $quote_explode[] = "I'm";
  $quote_explode[] = "Cool";

  foreach($quote_explode as $key => $value){
      echo "<p>$value</p>";
  }

  echo "<p>Your new total word count is:</p>";
  echo "<p>" . count($quote_explode) . "</p>";

}





     //echo "<p>" . $alphabetize . "</p>


    else{
        echo "<p>Please enter 5 words separated by a space.</p>";
    }



?>
</body>
</html>