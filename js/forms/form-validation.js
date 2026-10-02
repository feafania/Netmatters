import validationRules from "./validation-rules.js";
import { getOrCreateErrorElement, removeErrorElement } from "./error-helper.js";

const DEBOUNCE_MS = 200;

export function initFormValidation() {
  const $form = $(".form--contact");
  if (!$form.length) return;

  const $fields = $form.find(".form__control");

  $fields.on("blur", function () {
    const $field = $(this);
    $field.data("touched", true);
    validateField($field);
  });

  $fields.on("input", function () {
    const $field = $(this);
    if (!$field.data("touched")) return;

    clearTimeout($field.data("timer"));
    $field.data("timer", setTimeout(() => validateField($field), DEBOUNCE_MS));
  });

  $form.on("submit", function (event) {
    event.preventDefault();

    let isFormValid = true;

    $fields.each(function () {
      const $field = $(this);
      $field.data("touched", true);
      if (!validateField($field)) isFormValid = false;
    });

    if (!isFormValid) {
      $fields.filter(".is-invalid").first().trigger("focus");
      return;
    }

    $form.addClass("is-success");
  });
}

function validateField($field) {
  const value = $field.val().trim();
  const rules = validationRules[$field.attr("id")];

  clearError($field);

  if (!rules) return true;

  if (rules.required && !value) {
    showError($field, rules.requiredMessage ?? validationRules.default.message);
    return false;
  }

  if (!value) return true;

  if (rules.minLength && value.length < rules.minLength) {
    showError($field, rules.message);
    return false;
  }

  if (rules.regex && !rules.regex.test(value)) {
    showError($field, rules.message);
    return false;
  }

  markValid($field);
  return true;
}

function showError($field, message) {
  const $error = getOrCreateErrorElement($field, message);

  $field
    .addClass("is-invalid")
    .attr({ "aria-invalid": "true", "aria-describedby": $error.attr("id") });
}

function clearError($field) {
  $field
    .removeClass("is-invalid is-valid")
    .removeAttr("aria-invalid")
    .removeAttr("aria-describedby");

  removeErrorElement($field);
}

function markValid($field) {
  $field.addClass("is-valid").attr("aria-invalid", "false");
}