(() => {
  const body = document.querySelector('body')
  body.addEventListener('click', handleMenuClick)
  document.addEventListener('keydown', onEscPress);

  function handleMenuClick(e) {
    let target = e.target;
    while (target) {
      if (target.parentElement === e.currentTarget) {
        hideExcept();
        break;
      }

      if (target.classList.contains('nav-item-click-listener')) {
        // CLick on menu item
        const mainNavItemContainer = target.closest('.nav-main-item');

        if(mainNavItemContainer.classList.contains('is-opened')){
          // Menu is hidden. Show menu
          mainNavItemContainer.classList.remove('is-opened')
          // And hide other
        }else{
          // Menu is visible. Hide everything
          // hideExcept();
          mainNavItemContainer.classList.add('is-opened');
        }
          hideExcept(mainNavItemContainer);
        break;
      }
      target = target.parentElement;
    }
  }
  function hideExcept(exceptElement) {
    body.querySelectorAll('.nav-main-item')
      .forEach((el) => el !== exceptElement && el.classList.remove('is-opened'))
  }

  function onEscPress(e) {
    if (e.code === 'Escape') {
      hideExcept();
    }
  }

})();
