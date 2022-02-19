//Menu Modal Start
var modalBtnUser = document.querySelector(".hamburger-menu-view-user");
var modalBgUser = document.querySelector(".modal-bg-user");
var modalCloseUser = document.querySelector(".modal-close-user");

modalBtnUser.addEventListener('click', function (){
    modalBgUser.classList.add("modal-bg-active");
});

modalCloseUser.addEventListener('click', function (){
    modalBgUser.classList.remove("modal-bg-active");
});

window.onclick = function(e){
    if(e.target == modalBgUser){
        modalBgUser.classList.remove("modal-bg-active");
    }
}

//Menu Modal End