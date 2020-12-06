// Begin Nav

// Premade function for mobile nav usage
function jsburger() {

    const burger = document.getElementsByClassName('js-burger')[0];
    const isactive = 'is-active';
    const nav = document.getElementsByClassName('js-nav')[0];

    burger.addEventListener('click', () => {
        if (burger.classList.contains(isactive)) {
            burger.classList.remove(isactive);
            nav.classList.remove(isactive);
        }
        else {
            burger.classList.add(isactive);
            nav.classList.add(isactive);
        }
    });
}

// End Nav







// init functions
jsburger();