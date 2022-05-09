window.onscroll = function() {scrollFunction()};

scrollFunction = () => {
    if (document.documentElement.scrollTop > 800) {
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


// ************* Animation Bandeau *********************** //

const slidingBandeau = document.querySelectorAll('.bandeau');

slidingBandeau.forEach((bandeau) =>{

    window.addEventListener('scroll', () => {
        const{scrollTop, clientHeight} = document.documentElement;
    
        const topElementToTopViewport = bandeau.getBoundingClientRect().top;
    
        // methode "toFixed" permet d'enlever les chiffres apres la virgule
        if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.50) {
            bandeau.classList.add('active')
        }
    
    })
})

// script js swiper 

var swiper = new Swiper(".mySwiper", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });