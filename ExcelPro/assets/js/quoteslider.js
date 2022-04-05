$(document).ready(function () {
    //rotation speed and timer
    var speed = 5000;
    var run = setInterval(rotate, speed);
    var slides = $('.slide');
    var container = $('#slides ul');
    var elm = container.find(':first-child').prop("tagName");
    var item_width = container.width();
    var previous = 'prev'; //id of previous button
    var next = 'next'; //id of next button
    slides.width(item_width); //set the slides to the correct pixel width
    container.parent().width(item_width);
    container.width(slides.length * item_width); //set the slides container to the correct total width
    container.find(elm + ':first').before(container.find(elm + ':last'));
    resetSlides();


    //if user clicked on prev button

    $('#buttons a').click(function (e) {
        //slide the item

        if (container.is(':animated')) {
            return false;
        }
        if (e.target.id == previous) {
            container.stop().animate({
                'left': 0
            }, 1500, function () {
                container.find(elm + ':first').before(container.find(elm + ':last'));
                resetSlides();
            });
        }

        if (e.target.id == next) {
            container.stop().animate({
                'left': item_width * -2
            }, 1500, function () {
                container.find(elm + ':last').after(container.find(elm + ':first'));
                resetSlides();
            });
        }

        //cancel the link behavior
        return false;

    });

    //if mouse hover, pause the auto rotation, otherwise rotate it
    container.parent().mouseenter(function () {
        clearInterval(run);
    }).mouseleave(function () {
        run = setInterval(rotate, speed);
    });


    function resetSlides() {
        //and adjust the container so current is in the frame
        container.css({
            'left': -1 * item_width
        });
    }
});

$(document).ready(function () {
    var speed1 = 25000;
    var run1 = setInterval(rotate1, speed1);
    var slides1 = $('.slide1');
    var container1 = $('#slides1 ul');
    var elm1 = container1.find(':first-child').prop("tagName");
    var item_width1 = container1.width();
    var previous1 = 'prev1'; //id of previous button
    var next1 = 'next1'; //id of next button
    slides1.width(item_width1); //set the slides to the correct pixel width
    container1.parent().width(item_width1);
    container1.width(slides1.length * item_width1); //set the slides container to the correct total width
    container1.find(elm1 + ':first').before(container1.find(elm1 + ':last'));
    resetSlides1();


    //if user clicked on prev button

    $('#buttons1 a,i').click(function (e1) {
        //slide the item

        if (container1.is(':animated')) {
            return false;
        }
        if (e1.target.id == previous1) {
            container1.stop().animate({
                'left1': 0
            }, 1500, function () {
                container1.find(elm1 + ':first').before(container1.find(elm1 + ':last'));
                resetSlides1();
            });
        }

        if (e1.target.id == next1) {
            container1.stop().animate({
                'left1': item_width1 * -2
            }, 1500, function () {
                container1.find(elm1 + ':last').after(container1.find(elm1 + ':first'));
                resetSlides1();
            });
        }

        //cancel the link behavior
        return false;

    });

    //if mouse hover, pause the auto rotation, otherwise rotate it
    container1.parent().mouseenter(function () {
        clearInterval(run1);
    }).mouseleave(function () {
        run1 = setInterval(rotate1, speed1);
    });


    function resetSlides1() {
        //and adjust the container so current is in the frame
        container1.css({
            'left1': -1 * item_width1
        });
    }

});
//a simple function to click next link
//a timer will call this function, and the rotation will begin

function rotate() {
    $('#next').click();
}

function rotate1() {
    $('#next1').click();
}
