var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var Redis = require('ioredis');
var redis = new Redis();



redis.subscribe('test-channel', function(err, count) {

});

redis.on("message", function(channel, message) {
    message = JSON.parse(message);
    console.log("mew message in queue " + channel + ':' + message.event, message.data);
    io.emit(channel + ':' + message.event, message.data);
});

http.listen(3000, function(){
    console.log('listening on *:3000');
});



io.on('connection', function(){

    console.log('connected');

});

