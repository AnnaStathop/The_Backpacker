const switchElement = document.querySelector(".switch");
const flickerElement = document.querySelector(".flicker");

switchElement.addEventListener("click", function () {
  document.getElementById("light--2").classList.toggle("dark");
  //   document.getElementById("light--2").style.backgroundImage =
  //     "url('../images/2.jpg')";
});
