var currentImage = 0; // the currently selected image
var imageCount = 7; // the maximum number of images available

var socket = NaN;

//Array that keeps track of the screens 
var screens = new Array();


function trackScreen(onClickEvent){
    //Get the screenName
    var screenName = onClickEvent || window.event;

    // === Remove the default text first =============
    //Check if other screens are present
    if (screens.length == 0){
	//Remove span
	var defaultText = document.getElementById("defaulttext");
	defaultText.parentNode.removeChild(defaultText);
    }
    // === Append screenName to array ================
    var screen = {name: screenName, connected:false}
    screens.push(screen)

    // === Add new devide to the list =================
    //Get the menu element
    var menuList = document.getElementById('menu').children[0];
    
    //Create new li entry
    var entry = document.createElement('li');
    entry.id = screenName;

    //Append first the screen name
    var textNode = document.createTextNode(screenName);
    entry.appendChild(textNode);

    //Append some spaces
    entry.appendChild(document.createTextNode("  "));

    //Create the connect button and append it to li element
    var element = document.createElement('input');
    element.type='button';
    element.value = "Connect!";

    //Set the right onclick call
    element.onclick = function(onClickEvent){connectToScreen(onClickEvent); return false;};

    entry.appendChild(element);
    
    //Append new entry to menu
    menuList.appendChild(entry);
}

function untrackScreen(onClickEvent){
    //Get the screenName
    var screenName = onClickEvent || window.event;

    //Remove screen from variable here
    var screen_index = NaN;
    for (var i = 0; i < screens.length; i++){
	if (screens[i].name == screenName){
	    screen_index = i;
	    break;
	}
    }
    var screen_to_remove = screens[screen_index];
    screens.splice(screen_index, 1)
    //alert("Screens left: "+screens.length);

    //Check if other screens are present
    if (screens.length == 0){
	//Remove span
	var menuDiv = document.getElementById("menu");
	var parNode = document.createElement("p");
	var node = document.createTextNode("No devices detected");
	parNode.appendChild(node)
	parNode.id = 'defaulttext';
	menuDiv.appendChild(parNode);
    }

    //Remove from list
    var li_to_remove = document.getElementById(screen_to_remove.name);
    li_to_remove.parentNode.removeChild(li_to_remove);
    
    //Call refresh image distribution if it was connected
    if (screen_to_remove.connected == true){
	refreshScreenImages();
    }
}

function connectToScreen(onClickEvent){
    //Get screenname
    var screenName = onClickEvent.target.parentElement.id;

    // === Change attribute first ==============
    //Search for index
    var screen_index = NaN;
    for (var i=0; i < screens.length; i++){
	if (screens[i].name == screenName){
	    screen_index = i;    
	    break;
	}
    }
    //Change connected attribute to true
    screens[screen_index].connected = true;

    //Change button state!
    var button = document.getElementById(screenName);
    button = button.childNodes[2];
    button.setAttribute('value',  'Disconnect!');
    button.setAttribute('onclick',  'disconnectFromScreen(event);');

    //Refresh images
    refreshScreenImages();
}

function disconnectFromScreen(onClickEvent){
    //Get screenname
    var screenName = onClickEvent.target.parentElement.id;

    // === Change attribute first ==============
    //Search for index
    var screen_index = NaN;
    for (var i=0; i < screens.length; i++){
	if (screens[i].name == screenName){
	    screen_index = i;    
	    break;
	}
    }
    //Change connected attribute to true
    screens[screen_index].connected = false;
    
    //Change button state!
    var button = document.getElementById(screenName);

    button = button.childNodes[2];
    button.setAttribute('value',  'Connect!');
    button.setAttribute('onclick',  'connectToScreen(event);');

    //Refresh shown images
    refreshScreenImages();    
}

function refreshScreenImages(){
    //Re-create indexes
    var indexes = createIndexes(index);

    //Send them again
    socket.emit('image index', indexes);
}


function showImage (index){
    // Update selection on remote
    currentImage = index;
    var images = document.querySelectorAll("img");
    document.querySelector("img.selected").classList.toggle("selected");
    images[index].classList.toggle("selected");

    // Send the command to the screen
    //alert('Image index chosen: '+index);
    var indexes = createIndexes(index);
    socket.emit('image index', indexes);
}

//This function creates the image indexes corresponding to the
//connected screens
function createIndexes(index){
    var indexes = new Array();
    var fake_index = index;
    for (var i = 0; i < screens.length; i++){
	if (screens[i].connected == true){
	    indexes.push({screen: screens[i].name, index: fake_index});
	    fake_index = (fake_index + 1)%imageCount;
	}
    }
    return indexes;
}

function initialiseGallery(){
    var container = document.querySelector('#gallery');
    var i, img;
    for (var i = 0; i < imageCount; i++) {
        img = document.createElement("img");
        img.src = "images/" +i +".jpg";
        document.body.appendChild(img);
        var handler = (function(index) {
            return function() {
                showImage(index);
            }
        })(i);
        img.addEventListener("click",handler);
    }
    document.querySelector("img").classList.toggle('selected');
}

document.addEventListener("DOMContentLoaded", function(event) {
    //Start gallery first
    initialiseGallery();

    document.querySelector('#toggleMenu').addEventListener("click", function(event){
        var style = document.querySelector('#menu').style;
        style.display = style.display == "none" || style.display == ""  ? "block" : "none";
    });
    
    // Then connect to the server
    connectToServer();
});


function connectToServer(){
    // Connect to the socket.io server
    socket = io.connect('', {query: {type: "Remote"}});

    //Add screenName to list of devices when event occurs
    socket.on('screenConnectedToServer', function(screenName){
	trackScreen(screenName);
    });

    //Deal with screenName disconnect
    socket.on('screenDisconnectedFromServer', function(screenName){
	untrackScreen(screenName);
    });
}
