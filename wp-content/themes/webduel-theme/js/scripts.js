import "../css/style.css"

import DesktopNavbar from './modules/navabr';
import ServicesNavbar from './modules/ServicesNavbar';
import Animations from './modules/Animations';

let $ = jQuery; 

const desktopNavbar = new DesktopNavbar(); 
const servicesNavbar = new ServicesNavbar(); 
const animations = new Animations(); 

$( "li.menu-item" ).hover(function() {  // mouse enter
    $( this ).find( " > .sub-menu" ).slideDown(300); // display immediate child
    $(this).find('> .plus-sign').html('-');

}, function(){ // mouse leave
    if ( !$(this).hasClass("current_page_item") ) {  // check if current page
        $( this ).find( ".sub-menu" ).slideUp(300); // hide if not current page
        $(this).find('> .plus-sign').html('+');

    }
});

let arrowMenu = $('.menu-item').find("> .sub-menu"); 
console.log(arrowMenu);
if($(arrowMenu)){ 
    arrowMenu.parent().append('<div class="plus-sign">+</div>');
}
