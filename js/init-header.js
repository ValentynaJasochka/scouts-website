const getHeader = (headerContainer) => {
  return fetch('/header.html').then(function (response) {
    if (response.ok) {
      return response.text();
    }
    throw response;
  }).then(function (text) {
    headerContainer.innerHTML = text;
  });
}
