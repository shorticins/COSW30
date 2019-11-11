
<?php
// Add the database connection
include('database.php');
/*
*   CHECK IF THE FORM HAS BEEN SUBMITTED AND INSERT
*   NEW USER INTO THE DATABASE
*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    $password_confirm = $_POST['password_conf'];

 // Check if variables are empty
    // If they are not empty run this code

    if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($password) && !empty($password_confirm) && $password_confirm == $password){

    $insert_query = "INSERT INTO USER_DIBBERN (first_name, last_name, email, password)
                    VALUES ('$first_name', '$last_name', '$email', '$password')";

    $result = mysqli_query($connection, $insert_query);

// Check if the database returned anything
if($result) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($rows);
}
 else {
        echo "Something went wrong. Try again.";
    }
}

   if($result){
        echo "<p>New user added to the database</p><br>";
    }
    else{
        echo "<p>Please enter new user information.</p></br>";
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<p>Please enter a valid email address.</p>";
    }

    if($password !== $password_confirm){
        echo "Passwords must match";
    }
}


//QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE

// Create your query
$query = 'SELECT * FROM USER_DIBBERN';

// Run your query
$result = mysqli_query($connection, $query);

// Check if the database returned anything
if($result) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($rows);
} else {
    // Output an error
    echo "<p>Error</p>";
}

?>

<!doctype html>
<html>
<head>
    <title>I Like CRUD</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Create a New User</h1>

    <form action="crud.php" method="POST">

    <div class="rowTab">
      <div class="labels">
        <label for="first_name">*First Name</label>
      </div>
      <div class="rightTab">
        <input type="text" id="first_name" name="first_name"><br>
      </div>
      </div>

        <div class="rowTab">
      <div class="labels">
        <label for="last_name">*Last Name</label>
      </div>
      <div class="rightTab">
        <input type="text" id="last_name" name="last_name"><br>
      </div>
      </div>

      <div class="rowTab">
      <div class="labels">
        <label for="email">*Email</label>
      </div>
      <div class="rightTab">
        <input type="email" id="email" name="email"><br>
      </div>
      </div>

      <div class="rowTab">
      <div class="labels">
        <label for="password">*Password</label>
      </div>
      <div class="rightTab">
        <input type="password" id="password" name="password"><br>
      </div>
      </div>

      <div class="rowTab">
      <div class="labels">
        <label for="password_conf">*Confirm Password</label>
      </div>
      <div class="rightTab">
        <input type="password" id="password_conf" name="password_conf"><br>
      </div>
      </div>

<button>Register</button>
    </form>

<h2>List of Users</h2>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
<?php

 foreach($rows as $row) {
     //print_r($row);
        echo '<tr>
                <td>'.$row['first_name'].'</td>
                <td>'.$row['last_name'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['password'].'</td>
                <td><a href="update.php?id= '.$row['user_id'].'">edit</a></td>
              </tr>';
        }

?>
     </tbody>
    </table>
</body>
</html>