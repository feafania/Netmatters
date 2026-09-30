import initSlick from "./slick.js";
import initSticky from "./sticky.js";
import loadCookieConsent from "./cookies.js";
import { initSidebar } from "./sidebar.js";

$(document).ready(function(){
  if ($('.banner-slider').length || $('.logo-strip__list').length) {
    initSlick();
  }
  initSticky();

  loadCookieConsent();

  $('#side-menu-placeholder').load( "./partials/side-menu.html" ,
    function( response, status, xhr ) {
        if ( status === "error" ) {
            console.error("Unable to load side-menu.html: " + xhr.status + " " + xhr.statusText)
        } else if ( status === "success" || status === "notmodified" ) {
          initSidebar();
        }
    })
});

