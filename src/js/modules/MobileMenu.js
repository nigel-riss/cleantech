import $ from 'jquery';

class MobileMenu {
    constructor() {
        this.menuIcon = $('.menu-icon');
        this.mainMenu = $('.main-nav');
        this.events();
    }

    events() {
        this.menuIcon.click(
            this.toggleTheMenu.bind(this)
        );
    }

    toggleTheMenu() {
        this.menuIcon.toggleClass('menu-icon--close-x');
        this.mainMenu.toggleClass('main-nav--shown');
    }
}

export default MobileMenu;