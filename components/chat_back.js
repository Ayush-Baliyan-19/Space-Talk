var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

app.get('/chat', function(req,res){
    res.sendFile('C:/xampp/htdocs/Talking Space/components/chat.php');
});
users = [];
io.on('connection', function(socket){
    console.log('A user connected');
    socket.on('setUsername', function(data){
       if(users.indexOf(data) > -1){
          socket.emit('userExists', data + ' username is taken! Try some other username.');
       } else {
          users.push(data);
          console.log(users);
          socket.emit('userSet', {username: data});
      }
    });
    socket.on('msg',function(data){
       io.sockets.emit('newmsg',data);
    })
 });
 http.listen(3000, function(){
    console.log('listening on localhost:3000');
 });