getInclude('header', document.querySelector('header'))
  .then(() => {
    runMenu();
    runMenuMobile();
    document.querySelector('header').classList.remove('start')
  });
getInclude("footer", document.querySelector("footer"));
