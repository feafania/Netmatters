export function initAccordion() {
  document.querySelectorAll('[data-accordion-toggle]').forEach((toggle) => {
    const item = toggle.closest('.accordion__item');
    const answer = item?.querySelector('.accordion__answer');
    if (!item || !answer) return;

    toggle.setAttribute('aria-expanded', 'false');

    toggle.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();

      const willOpen = !item.classList.contains('accordion__item--open');
      item.classList.toggle('accordion__item--open', willOpen);
      toggle.setAttribute('aria-expanded', String(willOpen));

      if (willOpen) {
        answer.style.height = `${answer.scrollHeight}px`;
      } else {

        answer.style.height = `${answer.scrollHeight}px`;
        answer.getBoundingClientRect();
        answer.style.height = '0px';
      }
    });

    answer.addEventListener('transitionend', (e) => {
      if (e.propertyName !== 'height') return;
      if (item.classList.contains('accordion__item--open')) {
        answer.style.height = 'auto';
      }
    });
  });
}