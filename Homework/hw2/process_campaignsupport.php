<!Doctype html>
<html>
 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mighty Mouse 2020</title>
        <style>
        body {
         background-color: #0e4c8f;
         text-align: center;
         color: ghostwhite;
         font-size: 1.3em;
        }
         
         
         
        </style>
        
        </head>
        <body>
     <?php    
     //set vasiables
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $age = $_POST['age_range'];
    $gender = $_POST['gender'];
    $interest = $_POST['interest'];
    $contribution = $_POST['contribution'];
    $email_list = $_POST['email_list'];
    $comment = $_POST['comment'];
    
    //verify variables & output feedback
    if (!empty($email) && !empty($first_name) && !empty($last_name) && !empty($age) && !empty($gender)) {
     
            echo "<h1>Thank you for registering, $first_name $last_name!</h1>";
            echo "<h2>You indicated that you are a $age years old $gender.</h2>";
 
    }
         else {
        echo "Error. Some required information is missing";
         }
         
         
  
  //handle and output selected interests list
  
  if (!empty($interest)) {
   
   echo "<p>You noted that you are interested in the following:</p>";
   
   foreach ($_POST["interest"] as $interest){
   
    echo "<p>$interest</p>";
   
   }
  }
  else{
   
   echo "<p>You did not check any interests.</p>";
  
   
  }
    //mailing list feedback
         
         if (!empty($email_list)){
          echo "<p>We will send messages to $email </p>";
         }
         else {
           echo "<p>You have chosen not to subscribe to our mailing list. Visit your account to change this setting.</p>";
         }
         
         if ($contribution > 0){
          echo "<p>Thank you for your contribution of $$contribution</p>";
         }
         else {
          echo "<p>Please consider making a contribution next time.</p>";
         }
         
         //$comments: needs work outputs else message regardless of input
         if (!empty($comment)) {
          echo "Thank you for your feedback of: $comment";
         }
         else {
          echo "<p>You left no comments today.</p>";
         }
         
        ?> 
         
        </body>
        
        
        
        </html>