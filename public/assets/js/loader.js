
  var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 700);
}

function showPage() {
  document.getElementById("myDiv").style.display = "block";
  document.getElementById("registionbutton").style.visibility = "visible";
  document.getElementById("footer").style.visibility = "visible";
}