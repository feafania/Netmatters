import initSlick from "./slick.js";
import initSticky from "./sticky.js";
import { initSidebar } from "./sidebar.js";

$(document).ready(function(){
  initSlick();
  initSticky();

  $('#side-menu-placeholder').load( "./side-menu.html" ,
    function( response, status, xhr ) {
        if ( status === "error" ) {
            console.error("Unable to load side-menu.html: " + xhr.status + " " + xhr.statusText)
        } else if ( status === "success" || status === "notmodified" ) {
          initSidebar();
        }
    })
});

