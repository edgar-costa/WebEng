var devicename; // the name of this screen and specified in the URL
var imageCount = 7; // the maximum number of images available

document.addEventListener("DOMContentLoaded", function(event) {
    //Gets the name of the screen from the query parameters
    devicename = getQueryParams().name; 
    if (devicename) {
        var text = document.querySelector('#name');
        text.textContent = devicename;
    }
    //connectToServer(devicename);
    socket = io.connect('', {query: {type: "Screen", name: devicename}});       

    //Deal with new index event
    socket.on("message", function(data){
	showImage(data);
    });
});


// Gets an image index and modifies the screen.html accordingly to show the image
function showImage (index){
    var img = document.querySelector('#image');
    var msg = document.querySelector('#msg');
    if (index >= 0 && index <= imageCount){
        img.setAttribute("src", "images/" +index +".jpg");
        msg.style.display = 'none';
        img.style.display = 'block';
    }
}

// Removes the image from the screen, and no image is shown.
function clearImage(){
    var img = document.querySelector('#image');
    var msg = document.querySelector('#msg');
    img.style.display = 'none';
    msg.style.display = 'block';
}

// Parse the parameters in the query URL
function getQueryParams() {
    var qs =  window.location.search.split("+").join(" ");
    var params = {}, tokens,
        re = /[?&]?([^=]+)=([^&]*)/g;
    while (tokens = re.exec(qs)) {
        params[decodeURIComponent(tokens[1])]
            = decodeURIComponent(tokens[2]);
    }
    return params;
}

function connectToServer(devicename){
    //Connect to the socket.io server
    socket = io.connect('', {query: {type: "Screen", name: devicename}});
}

