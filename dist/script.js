function truncateText(e,t=130){return`<p class="truncate">${e.slice(0,t)}...</p>`}feather.replace(),$(document).ready((function(){$(".owl-carousel").owlCarousel({center:!0,items:2,loop:!0,autoplay:!0,autoplayTimeout:3e3,autoplayHoverPause:!0,dots:!1,responsive:{600:{items:4},1300:{items:7}}})}));let cards=document.getElementsByClassName("card__text"),plainText=[];for(let e=0;e<cards.length;e++)plainText[e]=cards[e].innerText;let htmlText=[];for(let e=0;e<cards.length;e++)htmlText[e]=cards[e].innerHTML;for(let e=0;e<cards.length;e++)cards[e].innerHTML=truncateText(plainText[e]);let btns=document.getElementsByClassName("card_btn");for(let e=0;e<cards.length;e++)btns[e].addEventListener("click",(function(){"truncate"==cards[e].firstChild.className?cards[e].innerHTML=htmlText[e]:cards[e].innerHTML=truncateText(plainText[e])}));
//# sourceMappingURL=script.js.map