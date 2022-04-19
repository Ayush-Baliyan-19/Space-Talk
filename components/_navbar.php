<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
              @import url('https://fonts.googleapis.com/css2?family=Abel&display=swap');

        *{
            padding: 0;
            margin: 0;
            font-family: "Abel";
        }
        #heading{
            width: fit-content;
            margin:auto;
            color: #d7b1bd;
        }

        #heading:hover{
            color: #ad70ad;
            transition: 0.2s ease;

        }
        #nav-con{
            z-index: 3;
            display: flex;
            background-color: black;
            position:-webkit-sticky;
            height: 9vh;
            border-bottom: 2px solid #854f85;
            align-content: space-between;
        }
        #item-list{
            list-style: none;
            display: flex;
            align-items:center;
            align-content: space-between;
            justify-content: center;
            flex-direction: row;
            min-width: 80%;
            font-size: large;
            font-weight: bold;
        }
        .nav-links a{
            position:static;
            margin: 1vh 2vw;
            text-decoration: none;
            display: inline-flex;
            color: #865478;
            padding: 0.5vh;
        }

        .nav-links a:hover{
            /* font-size: larger; */
            padding-bottom: 2vh;
            color: #7697e2;
            /* text-decoration: underline; */
            border-bottom: 3px solid #5276ca;
            transition: 0.2s ease-in-out;
        }

        /* .nav-links a{
        } */
        .btn{
            justify-content: center;
            align-items: center;
            margin: auto 2vw;
            color: #e0a8bb;
            text-decoration: none;
            background-color: #7c2c47;
            padding: 0.6%;
            border-radius: 10px;
            border: 3px #7c2c47 solid;
            font-weight: bolder;
        }

        .btn:hover{
            background-color:#854f85;
            color: #721d38;
            transition: 0.3s;
            font-weight: bolder;
        }
    </style>
</head>
<body>

    <div id="nav-con"> 
        <h1 id="heading">Talking Space</h1>
        <ul id="item-list">
            <li class="nav-links"><a href="home.php"><img src="../components/images/Home_button.png" alt="" height="30vh"><h3>Home</h3></a></li>
            <li class="nav-links"><a href="/"><img src="../components/images/chat_button.png" alt="" height="30vh"><h3>Message</h3></a></li>
            <li class="nav-links"><a href="/"><img src="../components/images/P.png" alt="" height="30vh"><h3>Profile</h3></a></li>
            <li class="nav-links"><a href="map.php"><img src="../components/images/logosolar.png" alt="" height="30vh"><h3>Galactic Map</h3></a></li>
        </ul>
        <a href="logout.php" type="button" class="btn">Logout</a>
    </div>
</body>
</html>