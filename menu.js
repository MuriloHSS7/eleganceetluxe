const navbar = document.querySelector(".navbar");
const menuButton = document.querySelector(".menu-button");

menuButton.addEventListener('click', () => {
    navbar.classList.toggle("show-menu");
})



let count = 1;
document.getElementById("radio1").checked = true;

setInterval(function () {
    nextImage();
}, 5000)

function nextImage() {
    count++;
    if (count > 3) {
        count = 1;
    }

    document.getElementById("radio" + count).checked = true;
}
