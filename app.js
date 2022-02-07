let burger = document.querySelector(".burger");
let close = document.querySelector(".close");
let home = document.querySelector(".home");
let chat = document.querySelector(".chat");
let login = document.querySelector(".login");
let register = document.querySelector(".register");

burger.addEventListener('click', function() {

    home.style.display = "block";
    chat.style.display = "block";
    login.style.display = "block";
    register.style.display = "block";
    document.querySelector(".burger").style.display = "none";
    document.querySelector(".close").style.display = "block";





})
close.addEventListener('click', function() {

    home.style.display = "none";
    chat.style.display = "none";
    login.style.display = "none";
    register.style.display = "none";
    document.querySelector(".close").style.display = "none";
    document.querySelector(".burger").style.display = "block";



});






//carrousel




// nbr = 3;
// p = 0;

// container = document.getElementById("container");
// left = document.getElementById("left");
// right = document.getElementById("right");

// container.style.width = (800 * nbr) + "px";

// for (i = 1; i <= nbr; i++) {

//     div = document.createElement("div");
//     div.className = "photo";
//     div.style.backgroundImage = `url('carrou/im${i}.jpg')`;
//     container.appenChild(div);


// }

// left = document.getElementById("left");
// right = document.getElementById("right");
// container = document.getElementById("container");

// left.addEventListener('click', function() {

//     container.style.backgroundImage = "url('carrou/im2.jpg')";



// })
// right.addEventListener('click', function() {

//     container.style.backgroundImage = "url('carrou/im1.jpg')";



// })