<!Doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Array Outputs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Raleway|Turret+Road&display=swap" rel="stylesheet">
<<<<<<< HEAD

=======
        
>>>>>>> f5bd9a9ff53f1bf212f42726634e5aed5bdaf8e3
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
<<<<<<< HEAD
        </style>

    </head>

    <body>
 <header>
=======
            #tables {
                display: block;
                padding: 5px;
                width: 200px;
                margin: auto;
            }
        </style>
        
    </head>
    
    <body>
 <header> 
>>>>>>> f5bd9a9ff53f1bf212f42726634e5aed5bdaf8e3
          <h1> Fun with Arrays</h1>
        </header>

<?php
$quote = $_POST['text'];
$quote_explode = explode(' ', $quote);





if(!empty($quote)) {
    echo "<h2>Your original list is:</h2>";
<<<<<<< HEAD

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




=======
    
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
   echo "<br>";
   
   
   //add words to array
   
   echo "<h2>Your list with three words added is:</h2>";
   $quote_explode = explode(' ', $quote);
  $quote_explode[] = "Because";
  $quote_explode[] = "I'm";
  $quote_explode[] = "Cool";
  
  foreach($quote_explode as $key => $value){
      echo "<p>$value</p>";
  }
  
  echo "<p><strong>Your new total word count is:<strong></p>";
  echo "<p>" . count($quote_explode) . "</p>";
  
  echo "<br>";
  
  $removed_index = array_slice($quote_explode, 3);
  
  echo "<h2>Your list after removing the first 3 items is:</h2>";
  
  foreach($removed_index as $key => $value){
      echo "<p>$value</p>";
  }
  
  echo "<p><strong>Your word count is now:</strong></p>";
  
  echo count($removed_index);
  
  echo "<br>";
  
}
    
    
    
    
>>>>>>> f5bd9a9ff53f1bf212f42726634e5aed5bdaf8e3

     //echo "<p>" . $alphabetize . "</p>


    else{
        echo "<p>Please enter 5 words separated by a space.</p>";
    }



?>
<<<<<<< HEAD
=======
<p>Return to <a href="quote.html">form</a></p>
<p>~OR~</p>
<form action="population.php" method="POST">
<button id="tables" type="submit">Go to Array Tables</button>
</form>
>>>>>>> f5bd9a9ff53f1bf212f42726634e5aed5bdaf8e3
</body>
</html>