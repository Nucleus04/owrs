var edit1 = document.getElementById('edit1');
var edit2 = document.getElementById('edit2');
var modal1 = document.getElementById('formmodal1');
var modal2 = document.getElementById('formmodal2');
var span1 = document.getElementsByClassName('close')[0];
var span2 = document.getElementsByClassName('close')[1];
var body = document.getElementsByClassName('body')[0];


edit1.onclick = function(){
    modal1.style.display = 'block';
    body.style.filter = 'blur(8px)';
}
edit2.onclick = function(){
    modal2.style.display = 'block';
    body.style.filter = 'blur(8px)';
}
span1.onclick = function(){
    modal1.style.display = 'none';
    body.style.filter = 'none';
}
span2.onclick = function(){
    modal2.style.display = 'none';
    body.style.filter = 'none';
}

window.onclick = function(event) {
    if (event.target == modal1) {
      modal1.style.display = "none";
      body.style.filter = "none";

    }
    if (event.target == modal2) {
      modal2.style.display = "none";
      body.style.filter = "none";

    }
  }
