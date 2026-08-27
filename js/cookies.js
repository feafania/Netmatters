export default function loadCookieConsent() {
  const cookieModal = document.querySelector('#cookie-placeholder');
  if (cookieModal) {
    fetch("./cookies.html")
      .then(res => {
        if (!res.ok) {
          throw new Error(`HTTP error: ${res.status} ${res.statusText}`);
        }
        return res.text()
      })
      .then(data => {
        cookieModal.outerHTML = data;
      })
      .catch(err => console.error("Unable to load cookies.html: ", err))
      .then(() => handleCookieConsent())
      .catch(err => console.error(err));
  }
}

const STORAGE_KEY = 'cookiesConsent';
const ACCEPTED = 'accepted';

function handleCookieConsent() {
  const cookieModal = document.querySelector('#cookie-consent');
  if (!cookieModal) return;

  const cookiesConsent = localStorage.getItem(STORAGE_KEY);

  if (cookiesConsent) {
    cookieModal.classList.add('is-hidden');
  } else {
    document.body.classList.add('no-scroll');
    const actions = cookieModal.querySelector('.cookie-consent__actions');

    actions.addEventListener('click', (e) => {
      const action = e.target.dataset.action;
      if (!action) return;
      e.preventDefault();

      if (action === 'accept') {
        localStorage.setItem(STORAGE_KEY, ACCEPTED);
        cookieModal.classList.add('is-hidden');
        document.body.classList.remove('no-scroll');
      }
    });
  }
}