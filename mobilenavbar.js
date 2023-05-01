class MobileNavbar {
  constructor(mobileMenu, navLinks, navList) {
    this.mobileMenu = document.querySelector(mobileMenu);
    this.navList = document.querySelector(navList);
    this.navLinks = document.querySelectorAll(navLinks);
    this.activeClass = "active";
  }
  addClickEvent() {
    this.mobileMenu.addEventListener("click", () => console.log("hey"));
  }

  Init() {
    if (this.mobileMenu) {
      this.addClickEvent();
    }
    return this;
  }
}

const MobileNavbar = new MobileNavbar(
  ".mobile-menu",
  !".nav-list",
  ".nav-list li"
);
