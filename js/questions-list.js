(() => {
  const body = document.querySelector('body');
  body.addEventListener('click', handleAnswer);
  const refs = {
    openAnswer: document.querySelector("[open-question]"),   
    closeAnswer: document.querySelector("[close-question]"),
    answer: document.querySelector("[answer-data]"),
    
  };

  // refs.openAnswer.addEventListener("click", handleOpenAnswer); 
  // refs.closeAnswer.addEventListener("click", handleCloseAnswer);
function handleAnswer (e) {
  let target = e.target;
  console.log(target);
  if (target.classList.contains('open-btn')) {
    handleOpenAnswer()
  }
  if (target.classList.contains('close-btn')) {
    handleCloseAnswer()
  }
}


  function handleOpenAnswer() {
    // console.log("hjoho");
    refs.answer.classList.remove("is-hidden");
    refs.openAnswer.classList.add("is-hidden");
    refs.closeAnswer.classList.remove("is-hidden");

  }
  function handleCloseAnswer() {
    refs.answer.classList.add("is-hidden");
    refs.openAnswer.classList.remove("is-hidden");
    refs.closeAnswer.classList.add("is-hidden");
  }
})()

