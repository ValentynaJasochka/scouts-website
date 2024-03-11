(() => {
  const body = document.querySelector('body');
  body.addEventListener('click', handleAnswer);

  function handleAnswer(e) {
    let target = e.target;
    if (
      target.hasAttribute('data-open-close-question') && target.classList.contains("open")
      || target.hasAttribute('data-open-question')
    ) {

      while (target) {
        if (target.hasAttribute('data-question-answer')) {
          target.querySelector("[data-open-close-question]").classList.remove("open");
          target.querySelector("[data-open-close-question]").classList.add("close");

          target.querySelectorAll("[data-answer-data]")
            .forEach((el)=> el.style.display = "block");
        }
        target = target.parentElement;
      }

      return;
    }
    if (
      target.hasAttribute('data-open-close-question') && target.classList.contains("close")

    ) {
      while (target) {
        if (target.hasAttribute('data-question-answer')) {
          target.querySelector("[data-open-close-question]").classList.remove("close");
          target.querySelector("[data-open-close-question]").classList.add("open");

          target.querySelectorAll("[data-answer-data]")
            .forEach((el)=> el.style.display = "none");
        }
        target = target.parentElement;
      }
    }
  }
})();
