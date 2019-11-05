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

    $insert_query = "INSERT INTO USER_DIBBERN (first_name, last_name, email, password)
                    VALUES ('$first_name', '$last_name', '$email', '$password')";

    $result = mysqli_query($connection, $insert_query);

    if($result && !empty($first_name) && !empty($last_name) && !empty($email) && !empty($password)) {
        echo 'New user added to the database';
    } else {
        echo 'Error entering new user';
    }
}


/*
*   QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE
*/
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
    echo 'Error';
}

?>

<!doctype html>
<html>
<head>
    <title>I Like CRUD</title>
</head>
<body>
    <h1>Create a New User</h1>
    <form action="crud.php" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name"><br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name"><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>
        <label for="password-conf">Confirm Password</label>
        <input type="password" id="password_conf" name="password-conf">
<button>Register</button>
    </form>
<?php
$password = $_POST['password'];
$password_confirm = $_POST['password-conf'];
        if($password !== $password_confirm) {
            echo "passwords must match.";
        }
?>

<h2>List of Users</h2>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
<?php

 foreach($rows as $row) {
        echo '<tr>
                <td>'.$row['first_name'].'</td>
                <td>'.$row['last_name'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['password'].'</td>
              </tr>';
        }

?>
     </tbody>
    </table>
</body>
</html>