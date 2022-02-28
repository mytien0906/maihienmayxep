(function($) {
  'use strict';
  $(function() {
    $('[data-toggle="offcanvas"]').on("click", function() {
      $('.sidebar-offcanvas').toggleClass('active')
    });
  });
})(jQuery);
(function($) {
  'use strict';
  $(function() {
    $('[data-toggle="offcanvas"]').on("click", function() {
      $('.dropdown').toggleClass('active')
    });
  });
})(jQuery);
$(document).ready(function() {
  $(".dropdown-toggle").dropdown();
});