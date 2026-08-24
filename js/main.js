$(document).ready(function(){
  $('.banner-slider').slick(
    {
      slidesToShow: 1,
      slidesToScroll: 1,

      infinite: true,

      autoplay: true,
      autoplaySpeed: 4000,

      dots: true,
      dotsClass: 'banner-slider__dots',
      draggable: false,
      arrows: false,

      pauseOnHover: true,
      pauseOnFocus: true,

      adaptiveHeight: true,

      speed: 300
    }
  );

  $('#side-menu-placeholder').load( "./side-menu.html" ,
    function( response, status, xhr ) {
        if ( status === "error" ) {
            console.error("Unable to load side-menu.html: " + xhr.status + " " + xhr.statusText)
        } else if ( status === "success" || status === "notmodified" ) {
          initSidebar();
        }
    })
});

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

func

// document.addEventListener('DOMContentLoaded', function(){
//     fetch("./side-menu.html")
//       .then(response => response.text())
//       .then((data) => {
//           const sideMenu = document.getElementById('side-menu-placeholder');
//           if (sideMenu) {
//               sideMenu.innerHTML = data;
//           }
//       })
//       .catch((error) => console.error("Unable to load side-menu.html: " + error));
// })
