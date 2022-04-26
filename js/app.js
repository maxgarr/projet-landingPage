window.onscroll = function() {scrollFunction()};

scrollFunction = () => {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 650) {
        document.getElementById("nav_left").style.display = "block";
    } else {
        document.getElementById("nav_left").style.display = "none";
    };

};





