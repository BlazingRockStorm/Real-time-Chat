var app    = require('express')();
var server = require('http').Server(app);
var io     = require('socket.io')(server);
var redis  = require('redis');

var server = app.listen(8890);
var io     = require('socket.io').listen(server);

io.on('connection', function (socket) {
  console.log("client connected");

  var redisClient = redis.createClient();

  redisClient.subscribe('message');

  redisClient.on("message", function(channel, data) {
    console.log(channel);
    console.log(data);
    socket.emit(channel, data);
  });

  socket.on('disconnect', function() {
    redisClient.quit();
  });
});




