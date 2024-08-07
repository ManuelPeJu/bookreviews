//responsive navbar

const hamburguer = document.querySelector(".hamburguer-menu svg");
hamburguer.addEventListener("click", function() {
    const mainMenu = document.querySelector(".container-menu"); 
    mainMenu.classList.toggle("show");
})



// Hero button
const heroButton = document.getElementById('hero_button');
heroButton.addEventListener('click', function(){
    const main_id = document.getElementById('main_id');
    window.scroll({
        top: main_id.offsetTop,
        left: 0,
        behavior: "smooth",
    });
});




