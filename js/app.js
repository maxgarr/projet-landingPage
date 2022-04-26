window.onscroll = function() {scrollFunction()};

scrollFunction = () => {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 650) {
        document.getElementById("nav_left").style.display = "block";
    } else {
        document.getElementById("nav_left").style.display = "none";
    };

};


const btnFermer = document.querySelector(".btnClose");

document.querySelectorAll('.image-container img').forEach(image =>{
    image.addEventListener("click", () =>{
        document.querySelector('.popup-image').style.display = 'block';
        document.querySelector('.popup-image img').src = image.getAttribute('src')
    })
});

btnFermer.addEventListener("click", () =>{
    document.querySelector('.popup-image').style.display = 'none';
})





