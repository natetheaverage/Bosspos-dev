var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var Redis = require('ioredis');
var redis = new Redis();



redis.subscribe(['test-channel', 'other'], function(err, count) {
    console.log("redis.subscribe Counts : " + count );
});

redis.on("message", function(channel, message) {
    message = JSON.parse(message);
    console.log("mew message in queue " + channel + ':' + message.event, message.data);
    io.emit(channel + ':' + message.event, message.data);
});

http.listen(3000, function(){
    console.log('listening on *:3000');
});

io.on('connection', function(socket){
    io.emit('newses', { hello: 'world' });
    console.log('user connected');
    io.on("poped", function (data) {
        console.log("poped" + data);
    });
    socket.on('disconnect', function(){
        console.log('user disconnected');
    });
});


io.on('connection', function(socket){
    socket.on('pop', function(msg){
        io.emit('addIt');
    });
});


