var hamb = document.querySelector('#hamburger');
var menu = document.querySelector("#main");

active = false;

hamb.onclick=function(e){
    console.log('Click op hanmb');
    active = !active;
    menu.setAttribute('class', active ? 'show' : '');
    window.scrollTo(0,0);
};

hamb.style.marginLeft = "0px";

var menuItems = document.querySelectorAll("#menu .item");

for(var i in menuItems){
    var item = menuItems[i];

    if(typeof item === 'object' && item.getAttribute('name') !== undefined&& item.getAttribute('name') !== null){
        item.addEventListener('click', function(){
            window.location = this.getAttribute(('name'));
        }, false);
    }
}

var hash = window.location.hash;
if(hash == null || hash == ""){
    console.log('empty');
} else {
    hash = hash.replace(/^#/, '');
    bubble = document.getElementById("bubble");
    bubble.innerHTML = hash;
    bubble.setAttribute('class', 'bubble show');
    console.log('Er zou iets moeten gebeuren');

    window.setTimeout(function(){
        bubble.setAttribute('class', 'bubble');
    }, 7000)
}
