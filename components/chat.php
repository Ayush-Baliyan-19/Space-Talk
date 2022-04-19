<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="/socket.io/socket.io.js"></script>
    <script>
        var socket = io();
      function setUsername(){
         socket.emit('setUsername', document.getElementById('name').value);
      };
      var user;
      socket.on('userExists', function(data){
         document.getElementById('error-container').innerHTML = data;
      });
      socket.on('userSet', function(data){
         user = data.username;
         document.body.innerHTML = '<input type="text" id="message">\
         <button type="button" name="button" onclick="sendMessage()">Send</button>\
         <div id="message-container"></div>';
      });
      function sendMessage(){
         var msg = document.getElementById('message').value;
         if(msg){
            socket.emit('msg', {message: msg, user: user});
         }
      }
      socket.on('newmsg', function(data){
         if(data.user){
            console.log("in if statement");
            document.getElementById('message-container').innerHTML +='<div><b>' + data.user + '</b>: ' + data.message + '</div>'
         }
      })
    </script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
</head>
<body>
    <?php

    include "_navbar.php";

    ?>

    <!-- <h1>Chat</h1> -->
    <div id="error-container"></div>
    <input id="name" type="text" name="name" value="" placeholder="Enter your name!">
    <button type="button" name="button" onClick="setUsername()">Let me chat!</button>
    </body>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script> -->
</body>
</html>