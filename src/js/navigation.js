$(function(){
    // Navbar shrink function
    var navbarShrink = function () {
        let navbarCollapsible = $('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.removeClass('navbar-shrink')
        } else {
            navbarCollapsible.addClass('navbar-shrink')
        }
    
    };
    
    // Shrink the navbar 
    navbarShrink();
    
    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);
    // Collapse responsive navbar when toggler is visible
    const navbarToggler = $('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .menu-item a')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.trigger('click')
            }
        });
    });

});    

