/**/

/* scrollTimer is a setTimeout method that will call the updateMenu function after 2000ms */
var scrollTimer = setTimeout(updateMenu, 2000);

/* Array where the different section ids are saved */
var sections = new Array('home', 'about', 'portfolio', 'blog', 'contact');

/* Array for the current section frequencies*/
var sf = new Array ();

/* Variable with the current maximum frequency */
var mf = 0;

/* Icon size limits*/
var imgMax = 70;
var imgMin = 30;


function isInSection(identifier, scrollPosition){
    /* Function that says if current scroll
       position is in identifier section */
    var section = $("#" + identifier);
    if (scrollPosition >= section.position().top && scrollPosition <= (section.position().top + section.outerHeight())){
        return true;
    }
    return false;
}





