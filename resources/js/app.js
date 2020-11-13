var Turbolinks = require("turbolinks");
Turbolinks.start();


window.addEventListener('load', function () {
    var e = document.querySelector("#menu-toggler");
    var t = document.querySelector('#tweetBtn');
    if(e) {
        e.addEventListener("click", function () {
            document.querySelector("#menu").classList.toggle("menu-active");
        });

    }



    if(t) {
        t.addEventListener('click', () => {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
            document.querySelector("#tweetInput").focus();

        });
    }

})
