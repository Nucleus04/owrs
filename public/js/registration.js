var modal = document.getElementById("registrationmodal");
var btn = document.getElementById("modalbtn");
var container = document.getElementById("maincontainer");
var step1  = document.getElementById("step1");
var step2  = document.getElementById("step2");
var pagebtn = document.getElementById("pagebtn");
var steplabel1 = document.getElementById("steplabel1");
var steplabel2 = document.getElementById("steplabel2");
var back =  document.getElementById("back");
var positive = document.getElementById("positive");
var negative = document.getElementById("negative");
var span = document.getElementsByClassName("close")[0];
var contianer1 = document.getElementById("container1");
var contianer2 = document.getElementById("container2");
var contianer3 = document.getElementById("container3");
var contianer4 = document.getElementById("container4");


btn.onclick = function() {
  modal.style.display = "block";
  container.style.filter = "blur(8px)";
}
pagebtn.onclick = function() {
    step1.style.display = "none";
    step2.style.display = "block";
    steplabel1.style.backgroundColor = "#a2a2a2";
    steplabel2.style.backgroundColor = "#85f937";
}
negative.onclick = function(){
    contianer1.disabled = true;
    contianer2.disabled = true;
    contianer3.disabled = true;
    contianer4.disabled = true;
}
positive.onclick = function(){
    contianer1.disabled = false;
    contianer2.disabled = false;
    contianer3.disabled = false;
    contianer4.disabled = false;
}
back.onclick = function() {
    step2.style.display = "none";
    step1.style.display = "block";
    steplabel2.style.backgroundColor = "#a2a2a2";
    steplabel1.style.backgroundColor = "#85f937";
}
span.onclick = function() {
    modal.style.display = "none";
    container.style.filter = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    container.style.filter = "none";
  }
}
