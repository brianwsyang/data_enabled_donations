const express = require('express'),
	  app = express(),
	  server = require('http').Server(app),
	  io = require('socket.io')(server);

app.use(express.static("."));

server.listen( port=process.env.PORT || 3000, function() {
	console.log('Listening to port: ' + port);
});

app.get('/', function (request, response) {
	response.sendFile(__dirname + '/index.html');
});



io.on('connection', function (socket) {

	socket.emit('news', {hello: 'world'});

	socket.on('my other event', function (data) {
		console.log(data);
	});

	socket.emit('test', {ex1: 'testing'});

});