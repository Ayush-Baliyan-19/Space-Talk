<?php

// $signupsuccess='false';
if ($_SERVER['REQUEST_METHOD']== 'POST'){
    include 'conn.php';
    // session_start();
    // $username = $_POST['username'];
    // $_SESSION['username'] = $username;
    // $desc = $_POST['desc'];
    // $_SESSION['desc'] = $desc;
    $user_email= $_POST['signupemail'];
    $uname = $_POST['username'];
    $pass = $_POST['signuppassword'];
    $cpass = $_POST['signupcpassword'];
    // $username = $_SESSION['username'];
    // $desc = $_SESSION['desc'];

    //check whether this email exists
    $existsql = "SELECT * FROM `profile` WHERE email = '$user_email'";
    $result = mysqli_query($conn , $existsql);
    $numrows = mysqli_num_rows($result);
    // echo $numrows;
    if($numrows==0){
        if($pass == $cpass){
            // header("Location: user_details.php");

            
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $query = "INSERT INTO `profile` (`email`, `uname`, `password`) VALUES ('$user_email', '$uname','$pass')";
            $result = mysqli_query($conn, $query);
            if($result){
                // session_start();
                // $email = $_SESSION['email'];
                // header("Location: user_details.php");
                // exit();
                header("Location: ../main.php");
            }
        else{
            header("Location: ?Paaswors do not match");
        }
    }
    else{
        $showerror = "Email_is_already_registered.";
        header("Location: ?$showerror");
        echo '<h1>Errrorrrr</h1>';
    }
}
}
?>