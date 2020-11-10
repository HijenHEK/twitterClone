require('./bootstrap');



var e = document.querySelector("#menu-toggler");
e.addEventListener("click" , function (){
    document.querySelector("#menu").classList.toggle("menu-active") ;
});
