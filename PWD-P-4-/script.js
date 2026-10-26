const tombol = document.getElementById("btnTop");

window.addEventListener("scroll", function () {
  if (window.scrollY > 500) {
    tombol.classList.add("tampil");      
  } else {
    tombol.classList.remove("tampil");   
  }
});

tombol.addEventListener("click", function () {
  window.scrollTo(0, 0);
});