var h_1 = document.getElementById("hinh1");
var h_2 = document.getElementById("hinh2");
var h_3 = document.getElementById("hinh3");

console.log(h_1.style.display);
function slideDoiAnh() {
  if (h_1.style.display == "block") {
    h_1.style.display = "none";
    h_2.style.display = "block";
    console.log("hien thi dong 9");
  } else if (h_2.style.display == "block") {
    h_2.style.display = "none";
    h_3.style.display = "block";
  } else {
    h_3.style.display = "none";
    h_1.style.display = "block";
  }
  setTimeout(slideDoiAnh, 2000);
}
setTimeout(slideDoiAnh, 2000);
