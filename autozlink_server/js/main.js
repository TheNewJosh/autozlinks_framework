//Hamburger Menu Start
const menuIcon = document.querySelector('.hamburger-menu');
const menuIconView = document.querySelector('.hamburger-menu-view');
const navbar = document.querySelector('#nav');
const lineT = document.querySelectorAll('.line');
lineT.forEach(item => item.style.backgroundColor = '#03A9F4');
menuIcon.addEventListener('click', () =>{
    navbar.classList.toggle("change");
    menuIcon.classList.toggle("changel");
    lineT.forEach(item => item.style.backgroundColor = '#48565C');
});

menuIconView.addEventListener('click', () =>{
    navbar.classList.toggle("change");
});

if(window.screen.width < 1088){ 
    document.querySelector("#header-div").classList.remove('nav');
    navbar.classList.add('navbar');
    
    document.querySelector("#menu-ulist").classList.remove('menu-ulist');
    document.querySelector("#menu-ulist").classList.add('nav-list');
}
//Hamburger Menu Ends

//AOS Animation Start
AOS.init({
    delay: 100, // values from 0 to 3000, with step 50ms
    duration: 1400, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: false,
});
//AOS Animation End
//Select Search Option End

//Singin Modal Start
var modalBtn = document.querySelector("#signin-modal");
var modalBtn2 = document.querySelector("#signin-modal-2");
var modalBg = document.querySelector(".modal-bg");
var modalClose = document.querySelector(".modal-close");

modalBtn.addEventListener('click', function (){
    modalBg.classList.add("modal-bg-active");
});

modalBtn2.addEventListener('click', function (){
    modalBg.classList.add("modal-bg-active");
});

modalClose.addEventListener('click', function (){
    modalBg.classList.remove("modal-bg-active");
});

window.onclick = function(e){
    if(e.target == modalBg){
        modalBg.classList.remove("modal-bg-active");
    }
}

//Singin Modal End

//Signin toggle eye
var statel = false;
function passwordl(){
    if(statel){
        document.getElementById("passwordl").setAttribute("type", "password");
        statel = false;
    }else{
        document.getElementById("passwordl").setAttribute("type", "text");
        statel = true;
    }

}