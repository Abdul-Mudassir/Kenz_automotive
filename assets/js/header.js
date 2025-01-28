

document.addEventListener('DOMContentLoaded', function () {
    const offcanvasElement = document.getElementById('offcanvasMenu');
    const bsOffcanvas = new bootstrap.Offcanvas(offcanvasElement);

    const menuButton = document.getElementById('menu-button');
    menuButton.addEventListener('click', function () {
        bsOffcanvas.show();
    });
});
