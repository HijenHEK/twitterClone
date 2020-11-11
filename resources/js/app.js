require('./bootstrap');



var e = document.querySelector("#menu-toggler");
e.addEventListener("click" , function (){
    document.querySelector("#menu").classList.toggle("menu-active") ;
});



document.querySelector('#tweetBtn').addEventListener('click',()=>{
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    document.querySelector("#tweetInput").focus() ;

});
