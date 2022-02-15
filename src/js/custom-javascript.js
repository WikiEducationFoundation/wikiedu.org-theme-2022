// Add your custom JS here.

// Accordion
const acc = document.getElementsByClassName("accordion");

for (let i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    let panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

// Search box
if(window.innerWidth > 960) {
  document.getElementById("search-icon").addEventListener("click", showSearchBar);

  function showSearchBar() {
    document.getElementById("search-wrapper").style.display = "inline-block";
    document.getElementById("main-menu").setAttribute('style', 'display:none !important');
    document.getElementById("search-icon").style.display = "none";
    document.getElementById("input_search").focus();
  }

  document.getElementById("search-close").addEventListener('click', () => {
    document.getElementById("search-wrapper").style.display = "none";
    document.getElementById("main-menu").setAttribute('style', 'display:flex');
    document.getElementById("search-icon").style.display = "block";
  });
}

//Mobile Menu
document.getElementById("hamburguer-btn").addEventListener("click", () => {
  document.getElementById("mySidepanel").classList.add("sidepanel-open");
  document.getElementById("mySidepanel").classList.remove("sidepanel-close");

});

document.getElementById("hamburguer-close-btn").addEventListener("click", () => {
  document.getElementById("mySidepanel").classList.add("sidepanel-close");
  document.getElementById("mySidepanel").classList.remove("sidepanel-open");
});
