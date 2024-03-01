const runMenu = () => {
  const refs = {
    openMenuFirst: document.querySelector("[menu-open-first]"),
    openMenuSecond: document.querySelector("[menu-open-second]"),
    openMenuThird: document.querySelector("[menu-open-third]"),
    // closeModalBtn: document.querySelectorAll("[data-modal-close]"),
    menuFirst: document.querySelector("[data-menu-first]"),
    menuSecond: document.querySelector("[data-menu-second]"),
    menuThird: document.querySelector("[data-menu-third]"),
  };
  console.log("HOHOHO");
  refs.openMenuFirst.addEventListener("click", toggleFirstModal);
  refs.openMenuSecond.addEventListener("click", toggleSecondModal);
  refs.openMenuThird.addEventListener("click", toggleThirdModal);

  function onEscPressFirst(e) {
    if (e.code === "Escape") {
      refs.menuFirst.classList.add("is-hidden");
    }
  }
  function onCloseFirstMenu(e) {
    if (!e.target.classList.contains("menu-first")) {
      refs.menuFirst.classList.add("is-hidden");
      document.removeEventListener("keydown", onEscPressFirst);
    }
  }

  function toggleFirstModal() {
    refs.menuFirst.classList.toggle("is-hidden");
    document.addEventListener("keydown", onEscPressFirst);
    document.addEventListener("click", onCloseFirstMenu);
  }

  function onEscPressSecond(e) {
    if (e.code === "Escape") {
      refs.menuSecond.classList.add("is-hidden");
    }
  }
  function onCloseSecondMenu(e) {
    if (!e.target.classList.contains("menu-second")) {
      refs.menuSecond.classList.add("is-hidden");
      document.removeEventListener("keydown", onEscPressSecond);
    }
  }
  function toggleSecondModal() {
    refs.menuSecond.classList.toggle("is-hidden");
    document.addEventListener("keydown", onEscPressSecond);
    document.addEventListener("click", onCloseSecondMenu);
  }
  function onEscPressThird(e) {
    if (e.code === "Escape") {
      refs.menuThird.classList.add("is-hidden");
    }
  }
  function onCloseThirdMenu(e) {
    if (!e.target.classList.contains("menu-third")) {
      refs.menuThird.classList.add("is-hidden");
      document.removeEventListener("keydown", onEscPressThird);
    }
  }
  function toggleThirdModal() {
    refs.menuThird.classList.toggle("is-hidden");
    document.addEventListener("keydown", onEscPressThird);
    document.addEventListener("click", onCloseThirdMenu);
  }
};

// runMenu();
