import initSticky from "../components/sticky.js";
import loadCookieConsent from "../components/cookies.js";
import { loadSideMenu } from "../components/sidebar.js";
import { initAccordion } from '../components/accordion.js';
import { initFormValidation } from "../forms/form-validation.js";

$(document).ready(function(){
  initAccordion();

  initSticky();

  loadCookieConsent();
  initFormValidation();

  loadSideMenu();
});

