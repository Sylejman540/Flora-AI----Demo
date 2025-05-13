let icon = document.getElementById("menu-icon");

icon.addEventListener("click", function() {
    if(icon.src.includes("images/menu.png")){
        icon.src = "images/close.png";
    }else{
        icon.src = "images/menu.png";
    }

    /*let menu = document.getElementById("mobile-menu");
    if (menu.style.display === "flex") {
        menu.style.display = "none";
    } else {
        menu.style.display = "flex";
    }*/
})