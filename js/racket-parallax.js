const racketContainer = document.querySelector("section.second")
const racket = document.querySelector(".second-racket-overflow")

let xPos = 0
let yPos = 0

var lastScrollTop = 0;
$(window).scroll(function(event){
   var st = $(this).scrollTop();
   if (st > lastScrollTop){
        if(yPos <= racketContainer.clientHeight/2){
            racket.style.transform = "translate(" + xPos + "px,-" + yPos + "px)"
            xPos+=5
            yPos+=5
        }
   } else {
        if(yPos >= 0){
            xPos-=5
            yPos-=5
            racket.style.transform = "translate(" + xPos + "px,-" + yPos + "px)"
        }
   }
   lastScrollTop = st;
});