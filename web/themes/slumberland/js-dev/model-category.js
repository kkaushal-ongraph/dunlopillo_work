(function ($, Drupal, drupalSettings) {

  function getParams(url) {
    var params = {};
    var parser = document.createElement('a');
    parser.href = url;
    var query = parser.search.substring(1);
    var vars = query.split('&');
    for (var i = 0; i < vars.length; i++) {
      var pair = vars[i].split('=');
      params[pair[0]] = decodeURIComponent(pair[1]);
    }
    return params;
  }

  $(document).ready(function () {

    // Generic selectors
    var $main = $("main");
    var $form = $('form[data-drupal-selector="views-exposed-form-model-category-list"]');

    $main.on("change", "input.form-autocomplete", function (e) {
      // TODO: Only triggers once, consider showing submit button purely for search, styled as a magnifying glass
      $form.change();
    });

    $main.on('click', '.view-id-model_category .view-content a', function (e) {
      e.preventDefault();
      var href = $(this).attr('href');
      var params = getParams(href);
      var entries = Object.entries(params);

      for (var i = 0; i < entries.length; i++) {
        var name = entries[i][0];
        var value = entries[i][1];
        var $field = $('input[name="' + name + '"][value="' + value + '"]');

        $field.prop('checked', true);
      }

      $form.change();
    });

  });

})(jQuery, Drupal, drupalSettings);
