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
