<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    include "conn.php";
    $login=false;
    $email=$_POST['loginemail'];
    $pass=$_POST['loginpassword'];
    
    echo header("Location: ?email$email");
    // echo $pass;
    // sleep(5);
    $sql="SELECT * FROM `profile` where email='$email'";
    $result = mysqli_query($conn, $sql);
    $numrows = mysqli_num_rows($result);
    // echo $numrows;
    if($numrows==1){
        $row = mysqli_fetch_assoc($result);
        if($email=$row['email']){
            $pass2 = password_hash($pass, PASSWORD_DEFAULT);
            if($pass2 = $row['password']){
                // session_start();
                // $_SESSION['email'] = $email;
                $login=true;
                // $sql = "SELECT `uname` FROM `profile` where `email`= '$email'";
                // $result = mysqli_query($conn, $sql);
                // $numrows = mysqli_num_rows($result);
                // $row = mysqli_fetch_assoc($result);
                // $uname = $row['uname'];
                // echo '
                // <script>
                // var email = '.$email.';
                // console.log(email);
                // sessionStorage.setItem("email",email);
                // </script>
                // ';
                header("Location: home.php");
                exit();
            }
            // header("Location:/Talking space/main.php");
            else{
                header("Location: ?invalid_credentials_password");  
            }
        }
        else{
            echo "invalid credentials email";
        }
    }
    else{
        echo'
        invalid credentials
        ';
    }
}