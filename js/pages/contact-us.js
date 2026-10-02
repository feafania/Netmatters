import initSticky from "../components/sticky.js";
import loadCookieConsent from "../components/cookies.js";
import { loadSideMenu } from "../components/sidebar.js";
import { initAccordion } from '../components/accordion.js';

$(document).ready(function(){
  initAccordion();

  initSticky();

  loadCookieConsent();
  loadSideMenu();
});

