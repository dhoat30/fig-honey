!function(r){var t={};function e(a){if(t[a])return t[a].exports;var n=t[a]={i:a,l:!1,exports:{}};return r[a].call(n.exports,n,n.exports,e),n.l=!0,n.exports}e.m=r,e.c=t,e.d=function(r,t,a){e.o(r,t)||Object.defineProperty(r,t,{enumerable:!0,get:a})},e.r=function(r){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(r,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(r,"__esModule",{value:!0})},e.t=function(r,t){if(1&t&&(r=e(r)),8&t)return r;if(4&t&&"object"==typeof r&&r&&r.__esModule)return r;var a=Object.create(null);if(e.r(a),Object.defineProperty(a,"default",{enumerable:!0,value:r}),2&t&&"string"!=typeof r)for(var n in r)e.d(a,n,function(t){return r[t]}.bind(null,n));return a},e.n=function(r){var t=r&&r.__esModule?function(){return r.default}:function(){return r};return e.d(t,"a",t),t},e.o=function(r,t){return Object.prototype.hasOwnProperty.call(r,t)},e.p="/wp-content/themes/webduel-theme/bundled-assets/",e(e.s=1)}([function(r,t,e){},function(r,t,e){"use strict";e.r(t);e(0);let a=jQuery;var n=class{constructor(){this.navbarActiveColor(),this.events()}events(){a(".navbar .search-bar-toggle").on("click",this.showSearchBar),a(".navbar .hamburger-menu").on("click",this.showNavbar)}showNavbar(){a(".navbar .mobile-navbar li").slideToggle()}showSearchBar(){console.log("Seartch Bar"),a(".navbar .search-bar").toggle(300),a(".navbar .close-icon").toggle(300),a(".navbar .search-icon").toggle(300)}navbarActiveColor(){a(".desktop-navbar ul li a").each((function(){a(this).attr("href")==="http://localhost"+window.location.pathname&&a(this).css("color","#24806C")}))}};let i=jQuery;var o=class{constructor(){this.events()}events(){i(".services .services-nav ul li").on("click",this.navClick.bind(this))}navClick(r){("Grazing Boxes"==r.target.innerHTML||"Hire"==r.target.innerHTML||"Delivery"==r.target.innerHTML||"Grazing Tables"==r.target.innerHTML)&&this.displayContent(r)}displayContent(r){var t=i(r.target);i(".services-nav li").removeClass("blue-background"),t.addClass("blue-background"),i(".services-container").slideUp(500);let e=r.target.innerHTML;e=e.split(" ").join("-").toLowerCase(),i(`.${e}-container`).slideDown(500)}};jQuery;gsap.registerPlugin(ScrollTrigger);var s=class{constructor(){this.animationTitle(),this.animationUnderline(),this.animationPara(),this.animationButtons(),this.animationLeftPara(),this.animationRightPara(),this.animationUSP(),this.animationMenu(),this.animationColumnTitle()}animationTitle(){gsap.from(".ft-pg-title",{scrollTrigger:{trigger:".ft-pg-title",scrub:!0,start:"-200px 30%",end:"-100px 20%"},duration:2,opacity:0,y:100})}animationUnderline(){gsap.from(".underline",{scrollTrigger:{trigger:".underline",start:"-200px 30%",end:"-100px 20%",scrub:!0},duration:2,opacity:0,width:0})}animationPara(){gsap.from(".center-paragraph",{scrollTrigger:{trigger:".center-paragraph",scrub:!0},duration:2,opacity:0,y:100})}animationButtons(){gsap.from(".btn",{scrollTrigger:{trigger:".underline",scrub:!0},duration:2,opacity:.4,x:300})}animationLeftPara(){gsap.from(".left-paragraph",{scrollTrigger:{trigger:".left-paragraph",start:"-200px 30%",end:"-100px 20%",scrub:!0},duration:2,opacity:0,x:-300})}animationRightPara(){gsap.from(".right-paragraph",{scrollTrigger:{trigger:".right-paragraph",start:"-200px 30%",end:"-100px 20%",scrub:!0},duration:2,opacity:0,x:600})}animationUSP(){gsap.from(".usp-container img",{scrollTrigger:{trigger:".usp-container",scrub:!0},duration:2,opacity:0,width:0})}animationMenu(){gsap.from(".menu-container",{scrollTrigger:{trigger:".menu-container",scrub:!0,start:"-400px 30%",end:"-100px 20%"},duration:2,opacity:0,y:300})}animationColumnTitle(){for(var r=document.getElementsByClassName("ft-column-title"),t=0;t<r.length;t++)gsap.from(r[t],{scrollTrigger:{trigger:r[t],scrub:!0,start:"-300px 30%"},duration:2,opacity:0})}};jQuery;new n,new o,new s}]);