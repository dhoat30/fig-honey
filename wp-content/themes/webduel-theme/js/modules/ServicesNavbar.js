let $ = jQuery;
class ServicesNavbar{ 
    constructor(){ 
        this.events(); 
    }
    //events
    events(){ 
        $('.services .services-nav ul li').on('click', this.navClick.bind(this)); 
    }

    //functions 
    navClick(e){ 
    
        if(e.target.innerHTML == 'Grazing Boxes'){ 
            this.displayContent(e); 
        }
        else if(e.target.innerHTML == 'Hire'){ 
            this.displayContent(e); 
        }
        else if(e.target.innerHTML == 'Delivery'){ 
            this.displayContent(e); 
        }
        else if(e.target.innerHTML == 'Grazing Tables'){ 
            this.displayContent(e); 
        }
    }

    displayContent(e){ 
        //add class
        var element = $(e.target); 
        $('.services-nav li').removeClass('blue-background');
        element.addClass("blue-background");
        
        //show content
        $('.services-container').slideUp(500);
        let ele = e.target.innerHTML;
         ele = ele.split(' ').join('-').toLowerCase();
         $(`.${ele}-container`).slideDown(500);
        
    }
}

export default ServicesNavbar;