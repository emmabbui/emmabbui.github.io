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

// Accordion toggle
const accordionBtns = document.querySelectorAll(".accordion-btn");

accordionBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    const content = btn.nextElementSibling;
    const isOpen = content.style.display === "block";

    // close all accordions
    document.querySelectorAll(".accordion-content").forEach((el) => {
      el.style.display = "none";
    });

    // toggle current accordion
    content.style.display = isOpen ? "none" : "block";
  });
});

// main page to projects page
document.addEventListener("DOMContentLoaded", () => {
  const accordionButtons = document.querySelectorAll(".accordion-btn");

  // Add toggle functionality
  accordionButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      const content = btn.nextElementSibling;

      // close all other projects
      accordionButtons.forEach((otherBtn) => {
        if (otherBtn !== btn) {
          otherBtn.classList.remove("active");
          otherBtn.nextElementSibling.style.display = "none";
        }
      });

      // toggle project
      const isOpen = btn.classList.contains("active");
      btn.classList.toggle("active", !isOpen);
      content.style.display = isOpen ? "none" : "block";
    });
  });

  // handles hash on page load
  const hash = window.location.hash.substring(1); // remove #
  if (hash) {
    const targetBtn = document.getElementById(hash);
    if (targetBtn && targetBtn.classList.contains("accordion-btn")) {
      const content = targetBtn.nextElementSibling;
      targetBtn.classList.add("active");
      content.style.display = "block";
      targetBtn.scrollIntoView({ behavior: "smooth", block: "start" });
    }
  }
});
