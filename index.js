var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var Redis = require('ioredis');
var redis = new Redis();

redis.setMaxListeners(200);
redis.subscribe('test-channel', function(err, count) {
    //
})



redis.on('messsage', function(channel, message){
    consol.log('Message received');
    alert('fire');
    message = JSON.parse(message);
    io.emit(channel + ':' + message.event, message.payload);
});


http.listen(3000, function(){
    console.log('listening on *:3000');
});