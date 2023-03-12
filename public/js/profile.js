var edit = document.getElementById("edit");
var edit1 = document.getElementById("edit1");
var modal = document.getElementById("formmodal");
var modal2 = document.getElementById("formmodal2");
var x = document.getElementsByClassName("close")[0];
var y = document.getElementsByClassName("close")[1];
var formtittle = document.getElementById("form-tittle");
var body = document.getElementById("body");
var form1 = document.getElementById("form1");
var form2 = document.getElementById("form2");


edit.onclick = function(){
    modal.style.display = "block";
    body.style.filter = "blur(8px)";

}
edit1.onclick = function(){
    modal2.style.display = "block";
    body.style.filter = "blur(8px)"
}
x.onclick = function(){
    modal.style.display = 'none';
    body.style.filter = "none";
}
y.onclick = function(){
    modal2.style.display = 'none';
    body.style.filter = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    body.style.filter = "none";

  }
  if (event.target == modal2) {
    modal2.style.display = "none";
    body.style.filter = "none";

  }
}
