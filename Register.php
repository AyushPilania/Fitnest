<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'Connect.php';

// -------- REGISTER --------
if(isset($_POST['signUp'])){
    $firstName = trim($_POST['fName']);
    $lastName  = trim($_POST['lName']);
    $email     = trim($_POST['email']);
    $password  = md5($_POST['password']); // hashed

    // Check if email exists
    $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE email=?");
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if($result && mysqli_num_rows($result) > 0){
        echo "Email already exists!";
        exit();
    } else {
        // Insert new user
        $stmt = mysqli_prepare($conn, "INSERT INTO users (fname, lname, email, password) VALUES (?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "ssss", $firstName, $lastName, $email, $password);

        if(mysqli_stmt_execute($stmt)){
            $_SESSION['email'] = $email; // automatically log in
            header("Location: HomePage.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

// -------- LOGIN --------
if(isset($_POST['signIn'])){
    $email = trim($_POST['email']);
    $password = md5($_POST['password']);

    $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE email=? AND password=?");
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if($result && mysqli_num_rows($result) > 0){
        $_SESSION['email'] = $email;
        header("Location: HomePage.php");
        exit();
    } else {
        echo "Incorrect Email or Password!";
    }
}
?>
