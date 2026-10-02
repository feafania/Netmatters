export function getOrCreateErrorElement($field, message) {
  const errorId = `${$field.attr("id")}-error`;
  let $error = $(`#${errorId}`);

  if (!$error.length) {
    $error = $("<span>", {
      id: errorId,
      class: "form__error",
      role: "alert"
    });
    $field.after($error);
  }

  return $error.text(message);
}

export function removeErrorElement($field) {
  $(`#${$field.attr("id")}-error`).remove();
}