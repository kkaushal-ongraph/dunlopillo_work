(function ($, Drupal, drupalSettings) {

  $(document).ready(function () {

    //
    var $blogCarousel = $('.block-views-blockblog-carousel .view-content');

    $blogCarousel.slick({
      rows: 0,
      variableWidth: true,
      infinite: false,
      arrows: false,
      dots: true,
    });

  });

})(jQuery, Drupal, drupalSettings);
