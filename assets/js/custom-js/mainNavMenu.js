document.addEventListener('DOMContentLoaded', () => {
    
    if (window.screen.width <= 1200) {
        // Settings begin
        let timeShowingFirstLevelItems = 200;
        // settings close
        let openButtonMobileMenu = document.getElementsByClassName('icon-menu')[0];
        let html = document.getElementsByTagName('html')[0];
        let mainMenuContainer = document.getElementsByClassName('center-side-block')[0];
        let mainMenu = document.getElementsByClassName('main-menu')[0];
        let firstLevelItems = document.getElementsByClassName('first-level-main-items');
        let firstLevelItemsWithChildren = document.getElementsByClassName('first-level-main-items menu-item-has-children')
        let secondLevelItems = document.getElementsByClassName('second-level-main-items');
        let secondLevelMenu = document.getElementsByClassName('second-level-main-menu');
        let thirdLevelMenu = document.getElementsByClassName('third-level-main-menu');
        let itemsLink = document.querySelectorAll('.menu-item-has-children > a');
        let itemsLinkFirstLevel = document.querySelectorAll('.first-level-main-items > a');
        let itemsLinkSecondLevel = document.querySelectorAll('.second-level-main-items > a');
        let itemsParent = document.getElementsByClassName('menu-item-has-children');
        let closeButtonMobileMenu = document.getElementsByClassName('close-button-mobile-menu')[0];
        let secondLevelArrowToBack = document.getElementsByClassName('custom-second-level-arrow');
        let thirdLevelArrowToBack = document.getElementsByClassName('custom-third-level-arrow');

        let isDisplayMobileMenu = false;
        let firstLevelCounter = 0;

        openButtonMobileMenu.addEventListener('click', () => {
            mainMenuContainer.classList.add('show-menu');
            console.log(html)
            html.style.overflow = 'hidden';

            let timerShowing = setTimeout(function tick() {
                if (firstLevelCounter < firstLevelItems.length) {
                    showFirstLevelItems(firstLevelCounter);
                    firstLevelCounter++;
                    setTimeout(tick, timeShowingFirstLevelItems)
                }
            });
        });

        closeButtonMobileMenu.addEventListener('click', () => {
            mainMenuContainer.classList.remove('show-menu');
            hiddenFirstLevelItems();
            hiddenSecondLevelMenu();
            hiddenThirdLevelMenu();
            hiddenSecondLevelItems();
            unsetTransparentToLinks(true, true);
            firstLevelCounter = 0;
            html.style.overflow = 'auto';
        });

        for (let i = 0; i < secondLevelArrowToBack.length; i++) {
            secondLevelArrowToBack[i].addEventListener('click', (event) => {
                event.stopPropagation();
                hiddenSecondLevelMenu();
                unsetTransparentToLinks(true);
            });
        }

        for (let i = 0; i < thirdLevelArrowToBack.length; i++) {
            thirdLevelArrowToBack[i].addEventListener('click', (event) => {
                event.stopPropagation();
                hiddenThirdLevelMenu();
                unsetTransparentToLinks(false, true);
            });
        }

        for (let item of itemsLink) {
            item.addEventListener('click', event => {
                event.preventDefault();
            });
        }

        for (let i = 0; i < firstLevelItems.length; i++) {  
            if (firstLevelItems[i].classList.contains('menu-item-has-children')) {
                firstLevelItems[i].addEventListener('click', () => {
                    firstLevelItems[i].classList.add('raise-first-level-item')
                    secondLevelMenu[i].classList.add('show-second-menu');
                    addTransparentToLinks(true);
                });
            }
        }

        for (let i = 0; i < secondLevelItems.length; i++) {
            if (secondLevelItems[i].classList.contains('menu-item-has-children')) {
                secondLevelItems[i].addEventListener('click', () => {
                    secondLevelItems[i].classList.add('raise-second-level-item')
                    thirdLevelMenu[i].classList.add('show-third-menu');
                    addTransparentToLinks(false, true);
                });
            }
        }
        function showFirstLevelItems(element) {
            firstLevelItems[element].classList.add('show-menu-item')
        }
        function hiddenFirstLevelItems() {
            for (let i = 0; i < firstLevelItems.length; i++) {
                firstLevelItems[i].classList.remove('show-menu-item')
                firstLevelItems[i].classList.remove('raise-first-level-item')
            }
        }
        function addTransparentToLinks(isFirstLevel = false, isSecondLevel = false) {
            if (isFirstLevel) {
                for (let link of itemsLinkFirstLevel) {
                    link.classList.add('opacity-0');
                }
            }
            if (isSecondLevel) {
                for (let link of itemsLinkSecondLevel) {
                    link.classList.add('opacity-0');
                }
            }
        }
        function unsetTransparentToLinks(isFirstLevel = false, isSecondLevel = false) {
            if (isFirstLevel) {
                for (let link of itemsLinkFirstLevel) {
                    link.classList.remove('opacity-0');
                }
            }
            if (isSecondLevel) {
                for (let link of itemsLinkSecondLevel) {
                    link.classList.remove('opacity-0');
                }
            }
        }
        function hiddenSecondLevelMenu() {
            for (let i = 0; i < secondLevelMenu.length; i++) {
                secondLevelMenu[i].classList.remove('show-second-menu');
            }
        }
        function hiddenSecondLevelItems() {
            for (let i = 0; i < secondLevelItems.length; i++) {
                secondLevelItems[i].classList.remove('raise-second-level-item')
            }
        }
        function hiddenThirdLevelMenu() {
            for (let i = 0; i < thirdLevelMenu.length; i++) {
                thirdLevelMenu[i].classList.remove('show-third-menu');
            }
        }
    }
});