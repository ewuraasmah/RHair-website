<?php
// create connection
$conn = mysqli_connect('localhost', 'root', '', 'lab8');

// check connection
if (!$conn) {    
    die('Connection failed: ' . mysqli_connect_error());
}

// grab form data
$uname = $_POST['username'];$upass = $_POST['password'];


// write query
$sql = "SELECT * FROM Users WHERE username = '$uname'";


// execute query
$result = mysqli_query($conn, $sql);


// check that exactly 1 row was returned
if (mysqli_num_rows($result) != 1) {    
    die('login failed');
}

// get query result as an array
$user = mysqli_fetch_assoc($result);

// verify user password match
$verify_pass = password_verify($upass, $user['password']);

// set user session if password is verified
if ($verify_pass) {    
    session_start();    
    $_SESSION['user'] = $user['username'];}
    
    
?>