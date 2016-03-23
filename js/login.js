var login = document.querySelector('#login');
var x=0;

login.onclick=function(e){
      document.getElementById("login"+x).style.display = 'none';
      x+=1;
};

