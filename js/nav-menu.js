(() => {
  const refs = {
    openMenuFirst: document.querySelector("[menu-open-first]"),
    openMenuSecond: document.querySelector("[menu-open-second]"),
    openMenuThird: document.querySelector("[menu-open-third]"),
    // closeModalBtn: document.querySelectorAll("[data-modal-close]"),
    menuFirst: document.querySelector("[data-menu-first]"),
    menuSecond: document.querySelector("[data-menu-second]"),
    menuThird: document.querySelector("[data-menu-third]"),
  };
  
  
  refs.openMenuFirst.addEventListener("click", toggleFirstModal);
  refs.openMenuSecond.addEventListener("click", toggleSecondModal);
  refs.openMenuThird.addEventListener("click", toggleThirdModal);
  // refs.closeModalBtn.addEventListener("click", toggleModal);
  function onEscPress(e) {
  if (e.code === 'Escape') {
    onCloseModalBtnClick();
  }
}

  function onCloseModalBtnClick() {
  refs.menuFirst.classList.add('is-hidden');  
  document.removeEventListener('keydown', onEscPress); 
}

  function toggleFirstModal(e) {   
    refs.menuFirst.classList.toggle("is-hidden");
    console.log(e.currentTarget);
    console.log(e.target);
    // if (e.currentTarget === e.target) {
    //   onCloseModalBtnClick();
    // }
    document.addEventListener('keydown', onEscPress);
  }
  function toggleSecondModal() {
    refs.menuSecond.classList.toggle("is-hidden");
  }
  function toggleThirdModal() {
    refs.menuThird.classList.toggle("is-hidden");
  }
})();

// function onCloseModalBtnClick() {
//   refs.backdrop.classList.add('is-hidden');
//   document.body.style.overflow = '';
//   document.removeEventListener('keydown', onEscPress);
//   refs.backdrop.removeEventListener('click', onBackdropClick);
// }

// function onBackdropClick(e) {
//   if (e.currentTarget === e.target) {
//     onCloseModalBtnClick();
//   }
// }

// function onEscPress(e) {
//   if (e.code === 'Escape') {
//     onCloseModalBtnClick();
//   }
