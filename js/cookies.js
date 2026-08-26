export default function initCookies() {
  const cookies = document.querySelector('#cookie-placeholder');
  if (cookies) {
    fetch("./cookies.html")
      .then(res => {
        if (!res.ok) { throw new Error(`HTTP error: ${res.status} ${res.statusText}`); }
        return res.text()
      })
      .then(data => { cookies.outerHTML = data })
      .catch(err => console.error("Unable to load cookies.html: ", err));
  }
}