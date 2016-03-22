var hamb = document.querySelector('#hamburger');
var menu = document.querySelector("#main");
console.log(hamb, menu);

var active = false;

hamb.onclick=function(e){
    console.log('Click op hanmb');
    active = !active;
    menu.setAttribute('class', active ? 'show' : '');
};

hamb.style.marginLeft = "0px";
