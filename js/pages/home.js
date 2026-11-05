import initSlick from "../components/slick.js";
import initSticky from "../components/sticky.js";
import loadCookieConsent from "../components/cookies.js";
import { loadSideMenu } from "../components/sidebar.js";

$(document).ready(function(){
  initSlick();
  initSticky();

  loadCookieConsent();
  loadSideMenu();
});

