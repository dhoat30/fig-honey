let $ = jQuery; 

class DesktopNavbar{ 
    constructor(){ 
        this.navbarActiveColor(); 
        this.events(); 
     
    }

    events(){ 
        //show search bar
      $('.navbar .search-bar-toggle').on('click', this.showSearchBar); 

      //show mobile navbar
      $('.navbar .hamburger-menu').on('click', this.showNavbar); 
    }

    //functions
    //show navbar 
    showNavbar(){ 
        $('.navbar .mobile-navbar li').slideToggle(); 
    }
    //show search bar
    showSearchBar(){ 
        console.log('Seartch Bar'); 
        $('.navbar .search-bar').toggle(300);
        $('.navbar .close-icon').toggle(300);
        $('.navbar .search-icon').toggle(300);
    }
    //change the active nav color
    navbarActiveColor(){ 
        $(".desktop-navbar ul li a").each(function () {
            if ($(this).attr('href') === `http://localhost${window.location.pathname}`) {
                $(this).css('color', '#24806C');
            }
        }); 
    }
}

export default DesktopNavbar; 