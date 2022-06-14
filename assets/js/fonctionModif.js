var hideshow = document.getElementById('hideshow');
let toggle = document.getElementById('togg');



toggle.addEventListener("click", () => {
  if(getComputedStyle(hideshow).display != "none"){
    hideshow.style.display = "none";
  } else {
    hideshow.style.display = "block";
  }
})