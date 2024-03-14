(() => {
  const body = document.querySelector('body');
  body.addEventListener('click', handleAnswer);

  function handleAnswer(e) {
    let toggler = e.target;
    while (toggler) {
      if (toggler.hasAttribute('data-open-close-question')) {
        let container = toggler;
        while (container) {
          if (container.hasAttribute('data-question-answer')) {
            if (container.classList.contains("opened")) {
              container.classList.remove('opened');
            } else {
              container.classList.add('opened');
            }
          }
          container = container.parentElement;
        }
      }
      toggler = toggler.parentElement;
    }
  }
})();
