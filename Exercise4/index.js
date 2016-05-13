var express = require('express');
var app = express();
var http = require('http').Server(app);

//Create array that will hold the connected screens
var connectedScreens = new Array();

// Initialize instance of socket.io by passing the http object.
var io = require('socket.io')(http);

//Serves the files under the public folder
app.use(express.static('public'));

//Listens on port 8080
http.listen(8080, function(){
    console.log('listening on *:8080');
});

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
    }
    
    socket.on("image index", function(index){
        console.log("New image index clicked: "+index);
        //socket.emit('show new image', index);
    })
});