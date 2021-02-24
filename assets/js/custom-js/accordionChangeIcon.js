document.addEventListener('DOMContentLoaded', () => {
    let panelsLinks = document.querySelectorAll('.panel-title a');

    if (panelsLinks.length > 0) {
        let panelsTitle = document.getElementsByClassName('panel-title');
        let panelCollapse = document.querySelectorAll('.panel-collapse');
        console.log(panelCollapse)

        for (let i = 0; i < panelsLinks.length; i++) {
            panelsLinks[i].addEventListener('click', toogleStatePanel(event, i));
        }

        function toogleStatePanel(event, i) {
            let isOpen = false;

            return function() {
                if (isOpen && !panelCollapse[i].classList.contains('collapsing')) {
                    isOpen = false;
                    panelsTitle[i].classList.remove('accordion__rotate-custom-plus');
                }else if (!panelCollapse[i].classList.contains('collapsing')) {
                    isOpen = true;
                    panelsTitle[i].classList.add('accordion__rotate-custom-plus');
                }
            }
        }
    }
});