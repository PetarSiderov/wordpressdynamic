$(function(){
//cache the window object
    var $window = $(window);

    //parallax bacground effect
    $('selection[data-type="background"]').each(function(){
        var $bgobj = $(this); // assigning the object

        $(window).scroll(function(){

            // scroll the background at var speed
            // the yPos is a negative value because we're scrolling it up
            var yPos = -($window.scrollTop() / $bgobj.data('speed'));

            //put together our final background position
            var coords = '40% '+ yPos + 'px';

            //Move the background 
            $bgobj.css({ backgroundPosition: coords });

        });//end window scroll 
    });
});