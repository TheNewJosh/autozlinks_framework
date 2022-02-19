// Hamburger Menu Start
const menuIcon = document.querySelector('.hamburger-menu');
const navbar = document.querySelector('.navbar');
const lineT = document.querySelectorAll('.line');
lineT.forEach(item => item.style.backgroundColor = '#03A9F4');
menuIcon.addEventListener('click', () =>{
    navbar.classList.toggle("change");
    lineT.forEach(item => item.style.backgroundColor = '#101010');
});
// Hamburger Menu End

//Show Hide Tracking Info Start
var showTrackingInfo = document.querySelector("#show-tracking-info");
var hideTrackingInfo = document.querySelector("#hide-tracking-info");
var contentTrackingInfo = document.querySelector("#content-tracking-info");

$('#show-tracking-info').click(function(){
    showTrackingInfo.classList.add("display-none");
    hideTrackingInfo.classList.remove("display-none");
    contentTrackingInfo.classList.remove("display-none");
});

$('#hide-tracking-info').click(function(){
    showTrackingInfo.classList.remove("display-none");
    hideTrackingInfo.classList.add("display-none");
    contentTrackingInfo.classList.add("display-none");
});                             
//Show Hide Tracking Info End