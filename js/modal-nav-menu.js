const runModal = () => {
  const refs = {
    openMobileFirst: document.querySelector("[open-mobile-first]"),
    openMobileSecond: document.querySelector("[open-mobile-second]"),
    openMobileThird: document.querySelector("[open-mobile-third]"),
    closeMobileFirst: document.querySelector("[close-mobile-first]"),
    closeMobileSecond: document.querySelector("[close-mobile-second]"),
    closeMobileThird: document.querySelector("[close-mobile-third]"),

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

  function openFirstMobile() {
    console.log("hjoho");
    refs.menuFirst.classList.remove("menu-none");
    refs.openMobileFirst.classList.add("menu-none");
    refs.closeMobileFirst.classList.remove("menu-none");

  }
  function closeFirstMobile() {
    refs.menuFirst.classList.add("menu-none");
    refs.openMobileFirst.classList.remove("menu-none");
    refs.closeMobileFirst.classList.add("menu-none");
  }
  function openSecondMobile() {
    console.log("hjoho");
    refs.menuSecond.classList.remove("menu-none");
    refs.openMobileSecond.classList.add("menu-none");
    refs.closeMobileSecond.classList.remove("menu-none");
  }
  function closeSecondMobile() {
    refs.menuSecond.classList.add("menu-none");
    refs.openMobileSecond.classList.remove("menu-none");
    refs.closeMobileSecond.classList.add("menu-none");
  }
  function openThirdMobile() {
    console.log("hjoho");
    refs.menuThird.classList.remove("menu-none");
    refs.openMobileThird.classList.add("menu-none");
    refs.closeMobileThird.classList.remove("menu-none");
  }
  function closeThirdMobile() {
    refs.menuThird.classList.add("menu-none");
    refs.openMobileThird.classList.remove("menu-none");
    refs.closeMobileThird.classList.add("menu-none");
  }
};
