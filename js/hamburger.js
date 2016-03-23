var hamb = document.querySelector('#hamburger');
var menu = document.querySelector("#main");

active = false;

hamb.onclick=function(e){
    console.log('Click op hanmb');
    active = !active;
    menu.setAttribute('class', active ? 'show' : '');
    window.scrollTo(0,0);

};

//document.body.onscroll = function(){
//    if(!window.active){
//        window.scrollTo(0,0);
//    }
//};

hamb.style.marginLeft = "0px";
