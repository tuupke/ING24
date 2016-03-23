var login = document.querySelector('#login');
var x=0;

login.onclick=function(e){
    if(x!=4){
      document.getElementById("login"+x).style.display = 'none';
      x+=1;
      }else{
      window.location="authorize.html";
      }
};

