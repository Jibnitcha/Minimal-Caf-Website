let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("slider");
    // let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < slides.length; i++) {
      slides[i].className = slides[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    // dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 4 seconds
  }

// Login Form
const loginbtn = document.querySelector('.loginBtn')
const formpage = document.querySelector('.formpage')

loginbtn.addEventListener('click',()=>{
    loginbtn.style.display = "none";
    loginbtn.style.display = "block";
    formpage.style.scale = "1";
    formpage.style.transition ="0.3s ease-in";
    
});


// slide picture reward

// let currentIndex = 0;
// const totalImages = images.length;

// function nextImage(){
  
// }


