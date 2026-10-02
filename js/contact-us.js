import initSticky from "./sticky.js";
import loadCookieConsent from "./cookies.js";
import { loadSideMenu } from "./sidebar.js";
import { initCheckbox } from './checkbox.js';
import { initAccordion } from './accordion.js';

$(document).ready(function(){
  initCheckbox();
  initAccordion();

  // initSticky();

  loadCookieConsent();
  loadSideMenu();
});

