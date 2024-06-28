document.addEventListener("DOMContentLoaded", () => {
    function initBurgerMenu() {
        const burgerMenuBtn = document.querySelector(".header-main-burger");
        const closeBurgerMenuBtn = document.querySelector(".close-burger-menu");
        const popupMenu = document.querySelector(".popup-menu");
        const popupMenuOverlay = document.querySelector(".popup-menu-overlay");
/*         const headerBtnGroup = document.querySelector(".header-btn-group"); */
        const primaryLogo = document.querySelector(".primary-logo");

        burgerMenuBtn.addEventListener("click", () => {
            requestAnimationFrame(() => {
             /*    headerBtnGroup.style.opacity = "0"; */
                /* primaryLogo.style.opacity = "0"; */
                setTimeout(() => {
                    popupMenuOverlay.style.display = "block";
                    popupMenu.style.transform = "translateX(0%)";
                }, 500);
            });
        });

        closeBurgerMenuBtn.addEventListener("click", () => {
            requestAnimationFrame(() => {
           /*      headerBtnGroup.style.opacity = "1"; */
                setTimeout(() => {
                    popupMenuOverlay.style.display = "none";
                    popupMenu.style.transform = "translateX(100%)";
                }, 500);
         /*        primaryLogo.style.opacity = "1"; */
            });

        });
    }
    initBurgerMenu();

});
