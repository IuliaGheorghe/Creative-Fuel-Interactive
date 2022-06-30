const mobileMenu = document.getElementById("mobile-menu");
const mobileMenuBtn = document.getElementById("mobile-menu-btn");
const mobileMenuContainer = document.getElementById("mobile-menu-container");

function checkMenuBttnFunction(){
    if(mobileMenuBtn.querySelector("i").classList.contains("fa-bars"))
        return 1;
    else
        return 0;
}

function showMobileMenu(){
    mobileMenu.style.width = "100%";
    mobileMenu.style.backdropFilter = "blur(4px)";
    mobileMenuContainer.style.display = "flex"
    mobileMenu.querySelector("i").classList.remove("fa-bars")
    mobileMenu.querySelector("i").classList.add("fa-x")
}

function hideMobileMenu(){
    mobileMenu.style.width = "auto";
    mobileMenu.style.backdropFilter = "blur(0)";
    mobileMenuContainer.style.display = "none"
    mobileMenu.querySelector("i").classList.add("fa-bars")
    mobileMenu.querySelector("i").classList.remove("fa-x")
}

mobileMenuBtn.addEventListener("click", function(){
    let buttonFunction = checkMenuBttnFunction();
    if(buttonFunction)
        showMobileMenu()
    else
        hideMobileMenu()

})