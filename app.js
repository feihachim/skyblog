//Boutton Inscription et connexion

let login= document.querySelector(".login");
let register=document.querySelector(".register");


login.addEventListener('click',function(){

document.querySelector(".connexion").style.display="block";
document.querySelector(".inscription").style.display="none";


    }
  
)

register.addEventListener('click',function(){

document.querySelector(".inscription").style.display="block";
document.querySelector(".connexion").style.display="none";



})

// Menu Burger 


let burger = document.querySelector(".burger");
let close = document.querySelector(".close");

burger.addEventListener('click',function(){

document.querySelector(".home").style.display="block";
document.querySelector(".chat").style.display="block";
document.querySelector(".login").style.display="block";
document.querySelector(".register").style.display="block";
document.querySelector(".burger").style.display="none";
document.querySelector(".close").style.display="block";



})
close.addEventListener('click',function(){

    document.querySelector(".home").style.display="none";
    document.querySelector(".chat").style.display="none";
    document.querySelector(".login").style.display="none";
    document.querySelector(".register").style.display="none";
    document.querySelector(".close").style.display="none";
    document.querySelector(".burger").style.display="block";
    
    
    
    })