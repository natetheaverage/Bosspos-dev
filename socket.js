var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var Redis = require('ioredis');
var redis = new Redis();

// Specify the port to serve on
http.listen(3000, function(){console.log('listening on *:3000');});

// Event channels
var events = [
    'test-channel',
    'other'
];

// Listen for the events array that fire through the redis event broadcaster
redis.subscribe(events, function(err, count) {});

// When we receive an an event parse the text in to a json object
// send(emit) that JSON to channel listeners
redis.on("message", function(channel, message) {
    message = JSON.parse(message);
    console.log("mew message in queue " + channel + ':' + message.event, message.data);
    io.emit(channel + ':' + message.event, message.data);
});

// Listen for channel connections and to events being fired from the page then handel each
io.on('connection', function(socket){
    console.log('user connected');
    socket.on('disconnect', function(){
        console.log('user disconnected');
    });

    // Events being emited to the server to handel
    socket.on('taskCreated', function(msg){
        //console.log(msg);
        io.emit('newTask', msg);
    });

    // Events being emited from Projects class to the server to handel
    socket
        .on('project:message', function(msg){

            io.emit('newProjectMessage', msg);
    })
        .on('project:conversation', function(msg){

            io.emit('newProjectConversation', msg);
    })
        .on('project:task', function(msg){

            io.emit('newProjectTask', msg);
    });
});




