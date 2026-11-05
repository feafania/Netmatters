function initSidebar () {
  $(document).on("click", '[data-toggle="sidebar"]', function (e) {
    e.stopPropagation();
    $("body").toggleClass("sidebar-open");
    $(this).toggleClass("is-active");
  });

  $(document).on("click", '#container', removeSidebar);
  $(document).on("click", '.sidebar-overlay', removeSidebar);
}

function removeSidebar () {
  let $body = $("body");
  if ($body.hasClass("sidebar-open")) {
    $body.removeClass("sidebar-open");
    $('[data-toggle="sidebar"]').removeClass("is-active");
  }
}

export function loadSideMenu() {
  $('#side-menu-placeholder').load( "./partials/side-menu.html" ,
    function( response, status, xhr ) {
      if ( status === "error" ) {
        console.error("Unable to load side-menu.html: " + xhr.status + " " + xhr.statusText)
      } else if ( status === "success" || status === "notmodified" ) {
        initSidebar();

        const currentPage = $('.header').data('page-url');

        $('#side-menu-placeholder a[href]').each(function () {
          const linkPage = $(this).attr('href').split('/').pop();

          if (linkPage === currentPage) {
            $(this).attr('href', '#');
            // $(this).removeAttr('href');
            $(this).on('click',removeSidebar);
          }
        });
      }
    })
}
