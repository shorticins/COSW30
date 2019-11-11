<?php
// Add the database connection
include('database.php');
/*
*GET superglobal gets data from url
*   CHECK IF THE URL HAS A $_GET VARIABLE CALLED ID
*/
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    //echo $id;
} else {
    // redirect to crud.php
    header('Location: crud.php');
    exit;
}
/*
*   AFTER SUBMITTING THE UPDATE FORM, UPDATE THE INFO
*   IN THE DATABASE
*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];


    // Validate the inputs (check if they're empty)!!!!
    if(empty($first_name) || empty($last_name) || empty($email) ||
        empty($password)) {
        echo '<p class="error">Error! One or more fields were left empty.</p>';
    } else {
        // If they aren't empty, create and run your query
        //WHERE condition is user id = $_GET id
        // single quotes needed for SQL for strings only!
        $update_query = "UPDATE USER_DIBBERN
                         SET first_name = '$first_name',
                            last_name = '$last_name',
                             email = '$email',
                             password = '$password'
                        WHERE user_id = $id";
        $result = mysqli_query($connection, $update_query);
    }
        if($result) {
            echo '<p class="success">User has been updated</p>';
            header('Location: crud.php');
            exit;
        } else {
            echo '<p class="error">Error updating user</p>';
        }
    }

/*
*   QUERY THE DATABASE FOR THE USER THAT HAS THE GET ID
*/
// Create your query
$id = $_GET['id'];
$query = "SELECT * FROM USER_DIBBERN WHERE user_id = $id";
// Run your query
$result = mysqli_query($connection, $query);
PRINT_R($RESULT);
if($result) {
    // If the database query was successful, store
    // the users information into a variable
    //assoc() gathers a single row
    $user = mysqli_fetch_assoc($result);
    //print_r($user);
    $first_name = $user['first_name'];
    $last_name  = $user['last_name'];
    $email      = $user['email'];
    $password   = $user['password'];
} else {
    echo "<p class=\"error\">Could not access database.</p>";
}

?>

<!doctype html>
<html>
<head>
    <title>Update User Information</title>
</head>
<body>
    <h1>Update User</h1>
    <form action="update.php?id=<?php echo $id; ?>" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $first_name; ?>"><br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $last_name; ?>"><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br>

        <label for="password">Password</label>
        <input type="text" id="password" name="password" value="<?php echo $password; ?>"><br>

         <!-- <input type="hidden" name="user_id" value="<?php echo $id; ?>"> !-->

        <button <a href="crud.php">Update User</button>
        <button name="delete">Delete User</button>
    </form>
</body>
</html>