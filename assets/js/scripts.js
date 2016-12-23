jQuery(document).foundation();

// WoW.js
 wow = new WOW(
    {
      boxClass:     'wow',      // default
      animateClass: 'animated', // default
      offset:       0,          // default
      mobile:       true,       // default
      live:         true        // default
    }
)
wow.init();

// Wave.js
Waves.init();
//Waves.attach('.button', ['waves-button', 'waves-float']);

// Owl Slider
$(document).ready(function(){
  $("#slider").owlCarousel();
});

// Sticky Footer
$(window).bind("load", function () {
    var footer = $("#footer");
    var pos = footer.position();
    var height = $(window).height();
    height = height - pos.top;
    height = height - footer.height();
    if (height > 0) {
        footer.css({
            'margin-top': height + 'px'
        });
    }
});
