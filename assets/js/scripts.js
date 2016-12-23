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
// Waves.attach('.button', ['waves-button', 'waves-float']);

// Owl Slider
$(document).ready(function(){
  $("#slider").owlCarousel();
});
