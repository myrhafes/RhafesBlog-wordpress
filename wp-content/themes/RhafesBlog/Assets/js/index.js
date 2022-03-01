let left_content = document.getElementById("nav");
let menu = document.getElementById("content");
let footer = document.getElementById("footer");

function showMenu() {
    left_content.style.left = "0";
    content.style.marginTop= "-60px";
    content.style.position = "fixed";
    footer.style.position = "fixed";
    footer.style.bottom = "-60px"; 
}

function closeMenu(){
    left_content.style.left = "-300px";
    content.style.marginTop= "0px";
    content.style.position = "relative";
    footer.style.position = "relative";
}
