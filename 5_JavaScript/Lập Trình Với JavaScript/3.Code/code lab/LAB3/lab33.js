var so1 = "";
var pt = "";
var so2 = "";
var kq = "";

function nhapso(x) {
  if (so1 == "") {
    so1 = x;
  } else {
    so2 = x;
  }
  document.getElementById("so1").innerHTML = so1;
  document.getElementById("so2").innerHTML = so2;
}
function nhappheptinh(x) {
  pt = x;
  document.getElementById("pt").innerHTML = pt;
}
function thuchien(x) {
  switch (pt) {
    case "+":
      document.getElementById("kq").innerHTML = "= " + (so1 + so2);
      break;
    case "-":
      document.getElementById("kq").innerHTML = "= " + (so1 - so2);
      break;
    case "*":
      document.getElementById("kq").innerHTML = "= " + so1 * so2;
      break;
    case "/":
      document.getElementById("kq").innerHTML = "= " + so1 / so2;
      break;
  }
}
function reset() {
  so1 = "";
  pt = "";
  so2 = "";
  kq = "";
  document.getElementById("pt").innerHTML = pt;
  document.getElementById("so1").innerHTML = so1;
  document.getElementById("so2").innerHTML = so2;
  document.getElementById("kq").innerHTML = kq;
}
