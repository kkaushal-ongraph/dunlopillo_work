(function ($, Drupal, drupalSettings) {

  function stickHeader($header) {
    var hh = $header.outerHeight();
    var $ghost = $('<div class="header__ghost"></div>');

    $ghost.height(hh);
    $ghost.insertBefore($header);
    $header.addClass('fixed');
  }

  function resizeHeader($header) {
    var hh = $header.outerHeight();
    $('.header__ghost').height(hh);
  }

  $(document).ready(function () {

    // Generic selectors
    var $body = $("body");
    var $main = $("main");
    var $header = $('header[role="banner"]');

    // Show/Hide the Local Tasks
    $main.on("click", ".local-tasks-arrow", function () {
      $("#block-slumberland-local-tasks").toggleClass("open");
    });

    // Layout builder fix
    if ($('.node-layout-builder-form').length > 0) {
      $body.addClass('layout-builder--enabled');
    }

    // Stick header and add ghost element
    stickHeader($header);

    $(window).on('resize', function () {
      resizeHeader($header);
    });

  });

})(jQuery, Drupal, drupalSettings);
