
var $slideInLeft_elements = document.getElementsByClassName('slideInLeft');
var $slideInBottom_elements = document.getElementsByClassName('slideInBottom');


//$animation_elements.concat(document.getElementsByClassName('slideInLeft');
var $window = $(window);

function check_if_in_view() {
  addClassIfInView($slideInLeft_elements )
  addClassIfInView($slideInBottom_elements )

}

function addClassIfInView($a){
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

    $.each($a, function() {

    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);
 
    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('in-view');
    
    }
  });
}
$(document).ready(
  function(){    
       check_if_in_view();
    }
  
);

$window.on('scroll resize', check_if_in_view);
//$window.trigger('scroll');
