document.addEventListener("DOMContentLoaded", () => {
    function initBurgerMenu() {
        const burgerMenuBtn = document.querySelector(".header-main-burger");
        const closeBurgerMenuBtn = document.querySelector(".close-burger-menu");
        const popupMenu = document.querySelector(".popup-menu");
        const popupMenuOverlay = document.querySelector(".popup-menu-overlay");
        const headerBtnGroup = document.querySelector(".header-main__btn-group");
        const primaryLogo = document.querySelector(".header-main-logo");

        function closeMenu() {
            requestAnimationFrame(() => {
                popupMenu.style.transform = "translateX(100%)";
                headerBtnGroup.style.opacity = "1";
                primaryLogo.style.opacity = "1";
                setTimeout(() => {
                    popupMenuOverlay.style.transform = "translateX(100%)";
                }, 1000);
            });
        }

        burgerMenuBtn.addEventListener("click", () => {
            requestAnimationFrame(() => {
                headerBtnGroup.style.opacity = "0";
                primaryLogo.style.opacity = "0";
                popupMenuOverlay.style.transform = "translateX(0%)";
                    popupMenu.style.transform = "translateX(0%)";
            });
        });

        popupMenu.querySelectorAll("a").forEach((link) => {
            link.addEventListener('click', () => {
                closeMenu();
            })
        })

        closeBurgerMenuBtn.addEventListener("click", () => {
            closeMenu();
        });
    }
    initBurgerMenu();

});
