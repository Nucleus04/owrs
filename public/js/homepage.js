var modal1 = document.getElementById("informationmodal1");
var modal2 = document.getElementById("informationmodal2");
var modal3 = document.getElementById("informationmodal3");
var modal4 = document.getElementById("informationmodal4");
var modal5 = document.getElementById("informationmodal5");

var button1 = document.getElementById("buttonone");
var button2 = document.getElementById("buttontwo");
var button3 = document.getElementById("buttonthree");
var button4 = document.getElementById("buttonfour");
var button5 = document.getElementById("buttonfive");
var closemodal = document.getElementsByClassName("close")[0];


//var content1 = decument.getElementById("content1");

button1.onclick = function(){
    modal1.style.display = "block";
    document.getElementById("content1").innerHTML;
}
button2.onclick = function(){
    modal2.style.display = "block";
    document.getElementById("content2").innerHTML;
}

button3.onclick = function(){
    modal3.style.display = "block";
    document.getElementById("content3").innerHTML;
}

button4.onclick = function(){
    modal4.style.display = "block";
    document.getElementById("content4").innerHTML;
}

button5.onclick = function(){
    modal5.style.display = "block";
    document.getElementById("content5").innerHTML;
}

closemodal.onclick = function(){
    modal1.style.display = "none";
    modal2.style.display = "none";
    modal3.style.display = "none";
    modal4.style.display = "none";
    modal5.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
    else
        if (event.target == modal2){
            modal2.style.display = "none";
        }
        else
            if (event.target == modal3){
                modal3.style.display = "none";
            }
            else
                if (event.target == modal4){
                    modal4.style.display = "none";
                }
                else
                    if (event.target == modal5){
                        modal5.style.display = "none";
                    }
}
