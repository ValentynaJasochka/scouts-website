const getInclude = (file, container) => {
  return fetch(`./${file}`).then(function (response) {
    if (response.ok) {
      return response.text();
    }
    throw response;
  }).then(function (text) {
    container.innerHTML = text;
  });
}
