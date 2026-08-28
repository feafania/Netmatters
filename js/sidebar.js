export function initSidebar () {
  $(document).on("click", '[data-toggle="sidebar"]', function (e) {
    e.stopPropagation();
    $("body").toggleClass("sidebar-open");
    $(this).toggleClass("is-active");
  });

  $(document).on("click", '#container', function () {
    if ($("body").hasClass("sidebar-open")) {
      $("body").removeClass("sidebar-open");
      $('[data-toggle="sidebar"]').removeClass("is-active");
    }
  });

  $(document).on("click", '.sidebar-overlay', function () {
    if ($("body").hasClass("sidebar-open")) {
      $("body").removeClass("sidebar-open");
      $('[data-toggle="sidebar"]').removeClass("is-active");
    }
  });
}
