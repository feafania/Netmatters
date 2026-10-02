export function initCheckbox() {
  $('.form__checkbox').each(function () {
    const $label = $(this);
    const $input = $label.find('.form__checkbox-input');
    if (!$input.length) return;

    const sync = () => {
      $label.toggleClass('form__checkbox--active', $input.prop('checked'));
    };

    $input.on('change', sync);
    sync();
  });
}