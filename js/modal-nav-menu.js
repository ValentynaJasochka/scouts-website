const runModal = () => {
  const refs = {
    openMobileFirst: document.querySelector("[open-mobile-first]"),
    openMobileSecond: document.querySelector("[open-mobile-second]"),
    openMobileThird: document.querySelector("[open-mobile-third]"),
    closeMobileFirst: document.querySelector("[close-mobile-first]"),
    closeMobileSecond: document.querySelector("[close-mobile-second]"),
    closeMobileThird: document.querySelector("[close-mobile-third]"),
    // closeModalBtn: document.querySelectorAll("[data-modal-close]"),
    menuFirst: document.querySelector("[data-menu-first]"),
    menuSecond: document.querySelector("[data-menu-second]"),
    menuThird: document.querySelector("[data-menu-third]"),
  };

  refs.openMobileFirst.addEventListener("click", openFirstMobile);
  refs.openMobileSecond.addEventListener("click", openSecondMobile);
  refs.openMobileThird.addEventListener("click", openThirdMobile);
  refs.closeMobileFirst.addEventListener("click", closeFirstMobile);
  refs.closeMobileSecond.addEventListener("click", closeSecondMobile);
  refs.closeMobileThird.addEventListener("click", closeThirdMobile);

  // function onEscPressFirst(e) {
  //   if (e.code === "Escape") {
  //     refs.menuFirst.classList.add("is-hidden");
  //   }
  // }
  // function onCloseFirstMenu(e) {
  //   if (!e.target.classList.contains("menu-first")) {
  //     refs.menuFirst.classList.add("is-hidden");
  //     document.removeEventListener("keydown", onEscPressFirst);
  //   }
  // }

  function openFirstMobile() {
    console.log("hjoho");
    refs.menuFirst.classList.remove("menu-none");
    // document.addEventListener("keydown", onEscPressFirst);
    // document.addEventListener("click", onCloseFirstMenu);
  }
  function closeFirstMobile() {
    refs.menuFirst.classList.add("menu-none");
    // document.addEventListener("keydown", onEscPressFirst);
    // document.addEventListener("click", onCloseFirstMenu);
  }
  function openSecondMobile() {
    console.log("hjoho");
    refs.menuSecond.classList.remove("menu-none");
    
  }
  function closeSecondMobile() {
    refs.menuSecond.classList.add("menu-none");
   
  }
  function openThirdMobile() {
    console.log("hjoho");
    refs.menuThird.classList.remove("menu-none");
  
  }
  function closeThirdMobile() {
    refs.menuThird.classList.add("menu-none");
   
  }

  // function onEscPressSecond(e) {
  //   if (e.code === "Escape") {
  //     refs.menuSecond.classList.add("is-hidden");
  //   }
  // }
  // function onCloseSecondMenu(e) {
  //   if (!e.target.classList.contains("menu-second")) {
  //     refs.menuSecond.classList.add("is-hidden");
  //     document.removeEventListener("keydown", onEscPressSecond);
  //   }
  // }
  // function toggleSecondModal() {
  //   refs.menuSecond.classList.toggle("is-hidden");
  //   document.addEventListener("keydown", onEscPressSecond);
  //   document.addEventListener("click", onCloseSecondMenu);
  // }
  // function onEscPressThird(e) {
  //   if (e.code === "Escape") {
  //     refs.menuThird.classList.add("is-hidden");
  //   }
  // }
  // function onCloseThirdMenu(e) {
  //   if (!e.target.classList.contains("menu-third")) {
  //     refs.menuThird.classList.add("is-hidden");
  //     document.removeEventListener("keydown", onEscPressThird);
  //   }
  // }
  // function toggleThirdModal() {
  //   refs.menuThird.classList.toggle("is-hidden");
  //   document.addEventListener("keydown", onEscPressThird);
  //   document.addEventListener("click", onCloseThirdMenu);
  // }
}



