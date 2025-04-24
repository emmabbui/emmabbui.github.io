// Hamburger menu
function toggleMenu() {
  const hamburger = document.getElementById("hamburger");
  const menu = document.querySelector(".navbar-options"); // <-- this is better

  hamburger.addEventListener("click", () => {
    menu.classList.toggle("active");
  });
}
// initialize the event listener
toggleMenu();
