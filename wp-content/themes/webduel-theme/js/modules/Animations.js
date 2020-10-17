let $ = jQuery; 

gsap.registerPlugin(ScrollTrigger);
class Animations{
    constructor(){ 
        this.animationTitle(); 
        this.animationUnderline(); 
        this.animationPara(); 
        this.animationButtons(); 
        this.animationLeftPara();
        this.animationRightPara();
        this.animationUSP(); 
        this.animationMenu(); 
        this.animationColumnTitle(); 
    }
    animationTitle(){ 
        gsap.from(".ft-pg-title", 
        {
            scrollTrigger:{
                trigger: '.ft-pg-title', 
                scrub: true, 
                start: '-300px 30%',
                end : '-100px 20%'
            },
            duration: 2, 
            opacity: 0, 
            y:100
        });

    }
    animationUnderline(){ 
        gsap.from(".underline", 
        {
            scrollTrigger:{
                trigger: '.underline', 
                start: '-200px 30%',
                end : '-100px 20%',
                scrub: true
            },
            duration: 2, 
            opacity: 0,
            width: 0 
         
        });

    }
    animationPara(){ 
        gsap.from(".center-paragraph", 
        {
            scrollTrigger:{
                trigger: '.center-paragraph', 
                scrub: true
            },
            duration: 2, 
            opacity: 0, 
            y:100
        });

    }
    

    animationButtons(){ 
        gsap.from(".btn", 
        {
            scrollTrigger:{
                trigger: '.underline', 
                scrub: true
            },
            duration: 2, 
            opacity: 0.4, 
            x: 300
            
        });

    }
    animationLeftPara(){ 
        gsap.from(".left-paragraph", 
        {
            scrollTrigger:{
                trigger: '.left-paragraph', 
                start: '-200px 30%',
                end : '-100px 20%',
                scrub: true

            },
            duration: 2, 
            opacity: 0, 
            y:100
        });

    }

    animationRightPara(){ 
        gsap.from(".right-paragraph", 
        {
            scrollTrigger:{
                trigger: '.right-paragraph', 
                start: '-200px 30%',
                end : '-100px 20%', 
                scrub: true
            },
            duration: 2, 
            opacity: 0, 
            y:100
        });

    }

    animationUSP(){ 
        gsap.from(".usp-container img", 
        {
            scrollTrigger:{
                trigger: '.usp-container',
                scrub: true
            },
            duration: 2, 
            opacity: 0, 
           width:0
        });

    }

    animationMenu(){ 
        gsap.from(".menu-container", 
        {
            scrollTrigger:{
                trigger: '.menu-container',
                scrub: true,start: '-400px 30%',
                end : '-100px 20%',
            },
            duration: 2, 
            opacity: 0, 
            y: 300
        });
    }

    animationColumnTitle(){ 
        var ele = document.getElementsByClassName('ft-column-title');
        for(var i = 0; i<ele.length; i++){ 
            gsap.from(ele[i], 
            {
                scrollTrigger:{
                    trigger: ele[i],
                    scrub: true,start: '-300px 30%'
                },
                duration: 2, 
                opacity: 0
            });
        }
       
    }
   
    

    
}

export default Animations; 

