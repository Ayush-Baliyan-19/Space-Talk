var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

app.get('/index.html',function(req,res){
    res.sendFile('C:/xampp/htdocs/Talking Space/chat/index.html');
});

io.on('connection', function(socket){
    console.log('A user connected');

    socket.on('disconnect', function(){
        console.log("A user disconnected");
    });
});

http.listen(5000, function(){
    console.log('listening on 5000')
});