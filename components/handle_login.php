<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    include "conn.php";
    $login=false;
    $email=$_POST['loginemail'];
    $pass=$_POST['loginpassword'];

    $sql="SELECT * FROM `profile` where email='$email'";
    $result = mysqli_query($conn, $sql);
    $numrows = mysqli_num_rows($result);
    // echo $numrows;
    if($numrows==1){
        $row = mysqli_fetch_assoc($result);
        if($email=$row['email']){
            if(password_verify($pass, $row['password'])){
                session_start();
                $_SESSION['email'] = $email;
                $login=true;
                // $sql = "SELECT `uname` FROM `profile` where `email`= '$email'";
                // $result = mysqli_query($conn, $sql);
                // $numrows = mysqli_num_rows($result);
                // $row = mysqli_fetch_assoc($result);
                // $uname = $row['uname'];
                echo '
                <script>
                var email = '.$email.';
                console.log(email);
                sessionStorage.setItem("email",email);
                </script>
                ';
                header("Location: home.php");
                exit();
            }
            // header("Location:/Talking space/main.php");
            else{
                echo 'invalid credentials';
            }
        }
        else{
            echo "invalid credentials";
        }
    }
    else{
        echo'
        invalid credentials
        ';
    }
}