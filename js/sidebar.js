function initSidebar () {
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

export function loadSideMenu() {
  $('#side-menu-placeholder').load( "./partials/side-menu.html" ,
    function( response, status, xhr ) {
      if ( status === "error" ) {
        console.error("Unable to load side-menu.html: " + xhr.status + " " + xhr.statusText)
      } else if ( status === "success" || status === "notmodified" ) {
        initSidebar();
      }
    })
}
