<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        *{
            margin: 0;
            padding: 0;
        } 
        body{
            background : url("https://cdn.theatlantic.com/thumbor/fZ1XhL4Mf3p91Hp1Yb6NPhuTHKc=/347x135:5734x3165/960x540/media/img/mt/2016/01/Saturn3/original.jpg");
            background-size : cover;
            border: 3px rgb(218 179 148) solid;
            height: 100vh;
            animation: load 3s 1 ease;
            border-radius: 10px;
            background-repeat:no-repeat ;
            overflow: hidden;
        }
        @keyframes load{
            0%{
                opacity: 0;
                border-radius: 0px;
                /* background-size: 100% 0vh; */
            }
            50%{
                opacity: 0.5;
                border-radius: 20px;
            }
            100%{
                opacity: 1;
                border-radius: 10px;
            }
        }
    </style>
    <!-- <meta name="theme-color" content="rgb(255,166,0)"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saturn</title>
</head>
<body>
    <?php

    include "_navbar.php";

    ?>
<div class="about">
    <h1 class="head">Sun</h1>
</div>
</body>
</html>