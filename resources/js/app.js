
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Require the bootstrap javascript file.
 **/
require('bootstrap/dist/js/bootstrap');

// require('semantic-ui-sass/semantic-ui.js');

/**
 * Mobile nav click event.
 */
const mobileMenuButtons = document.querySelectorAll(".btn-nav-toogle");
const mobileNav = document.querySelector(".mobile-nav-block");

for (var i = 0; i <= mobileMenuButtons.length; i++) {
    let mobileMenuButton = mobileMenuButtons[i];
    mobileMenuButton.addEventListener("click", (e) => {
        e.preventDefault();
        mobileNav.classList.toggle("open-mobile-nav");
    });
}

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

require('./components/Example');
