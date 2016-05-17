// Create the express object
var express = require('express');

// App is a function handler that is supplied to the HTTP server
var app = express();

// Create the web server
var http = require('http').Server(app);

// Initialize instance of socket.io by passing the http object.
var io = require('socket.io')(http);

// Serves the files under the public folder only
app.use(express.static('public'));

//Listens on port 8080
http.listen(8080, function(){
    console.log('listening on *:8080');
});


//Create array that will hold the connected screens
//var connectedScreens = new Array();


//Then I listen on the connection event for incoming sockets, and I log it to the console.
io.on('connection', function(socket){
    //Parse connect parameters
    var type = socket.handshake.query.type;

    //Log it
    console.log('New ' + type + ' connected!');  
    
    if (type == 'Screen'){
        //Get screen name
        var screenName = socket.handshake.query.name;

        //Log it
        console.log("\tScreen name: " + screenName);

	//Broadcast event to remotes!
	socket.broadcast.emit('screenConnectedToServer', screenName);
    }

    if (type == 'Remote'){
	var remote = socket.handshake.query.remote;
	console.log("Remote connected. Id: "+remote);
    }

    //Just re-broadcast the message to the screens
    socket.on('image index', function(data){
        console.log("New image index clicked");
        socket.broadcast.emit('message', data);
    })

    
    socket.on('disconnect', function(){
	console.log("disconnect received from socket. type: "+type);
	if (type == 'Screen'){
	    //Get screenName first
	    var screenName = socket.handshake.query.name;
	    console.log("Screen has been disconnected: "+screenName);

	    //Inform remotes about disconnect of screenName
	    socket.broadcast.emit('screenDisconnectedFromServer', screenName);
	}
    });


    socket.on('remoteConnect', function(data){
	var screen = data.screen;
	var remote = data.remote;
	console.log("Screen "+screen+" has been CONNECTED to remote with ID: "+remote);

	//Re-broadcast to screens
	socket.broadcast.emit("remoteConnect", data);
    });

    socket.on('remoteDisconnect', function(data){
	var screen = data.screen;
	var remote = data.remote;
	console.log("Screen "+screen+" has been DISCONNETED from remote with ID: "+remote);

	//Re-broadcast to screens
	socket.broadcast.emit("remoteDisconnect", data);
    });

    

});
