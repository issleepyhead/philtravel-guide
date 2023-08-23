let mobile = false;
if ($(document).innerWidth < 800) {
    $('.navbar').addClass('bg-dark')
}

// TO KEEP TRACK OF THE CURRENT DOT
function current_dot(dots, prev, next) {
    $(dots[prev]).removeClass("active");
    $(dots[next]).addClass("active");
}


jQuery(function() {
    let elements = $('.reveal');
    let right = this.querySelector('.container-right');
    let current = 0, is_done = true;
    let container = $("#s-container"), dots = $(".dot");
    $(dots[0]).addClass("active");

    /*
     * Animation for scrolling
    */
   let down = 0, up = 0;
    $(window).on("scroll", function() {
        let nav = $("#navbar");
        if ($("html").scrollTop() !== 0) {
            nav.addClass('bg-dark');
            nav.removeClass('py-3');
        } else {
            nav.removeClass('bg-dark');
            nav.addClass('py-3');
        }

        for (let i = 0; i < elements.length; i++) {
            let visible = 150, is_top = elements[i].getBoundingClientRect().top;
            let height = window.innerHeight;
            if (is_top < height - visible) {
                $(elements[i]).addClass('active');
            } else {
                $(elements[i]).removeClass('active');
            }

        }
    });

    /*
     * TO ANIMATE THE SLIDER AND THE DOTS
     * IF YOU HAVE A WAY TO IMPLEMENT THIS USING PURE CSS LET ME KNOW.
    */
    setInterval(()=> {
        if (current === 0) {
            if (is_done) {
                $(container).animate({"left": "-100%"}, "slow", complete=current_dot(dots, 0, 1));
                current += -100;
            } else {
                $(container).animate({"left": "0%"}, "slow", complete=current_dot(dots, 1, 0));
                is_done = true;
            }
        } else if (current === -100) {
            if (!is_done) {
                $(container).animate({"left": "-200%"}, "slow", complete=current_dot(dots, 1, 0));
                current += -100;
            } else {
                $(container).animate({"left": "-200%"}, "slow", complete=current_dot(dots, 1, 2));
                current += -100;
            }
        } else {
            $(container).animate({"left": "-100%"}, "slow", complete=current_dot(dots, 2, 1));
            current = 0, is_done = false;
        }
    }, 3500);

    
});