import initSticky from "./sticky.js";
import loadCookieConsent from "./cookies.js";
import { loadSideMenu } from "./sidebar.js";
import { initAccordion } from './accordion.js';

$(document).ready(function(){
  initAccordion();

  // initSticky();

  loadCookieConsent();
  loadSideMenu();
});

