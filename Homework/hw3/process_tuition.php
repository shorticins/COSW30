<!Doctype html>
<html>
 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LBCC Tuition Calculator</title>
       <link rel="stylesheet" href="tuition_styles.css">
       <style>
        body {
         color: black;
        }
        p {
         font-size: 25px;
        }
       </style>
        </head>
        <body>
        
        <header>
  <img src="lbcc_logo.png" alt="Long Beach City College logo">
</header>
     <?php    
     
     //declare variables
     $resident = $_POST['resident'];
     $units = $_POST['units'];
     $card = $_POST['card'];
     $parking = $_POST['parking'];
     $total_unit_cost = $resident * $units;
     $total_registration = ($total_unit_cost + 19 + $card + $parking);
     $scholarship_amt = rand(0, $total_registration);
     $balance_due = $total_registration - $scholarship_amt;
      
       if (!empty($resident) && !empty($units)){
        echo "<h2><strong>Basic Cost</strong></h2>";
        echo "<p>Tuition Cost: $units x $$resident = $$total_unit_cost </p>";
        echo "<p>Student Health Fee:" . " $" . "19" . "</p>";
        echo "<p>College Services Card: $$card</p>";
        echo "<p>Parking Permit: $$parking </p>";
        echo "<p>Total registration cost: $$total_registration<p>";
        echo "<p><strong>Scholarship Amount:</strong> $$scholarship_amt</p>";
        echo "<p><strong>Total College Balance Due:</Strong> $$balance_due</p>";
       }
       else{
        echo "Please complete the form to calculate total.";
       }
      
        ?> 
        
        <footer>
  <p><strong>&copy2019 Shanen Dibbern</strong></p>
</footer> 
         
        </body>
        
        </html>