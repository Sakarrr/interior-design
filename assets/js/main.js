// Js to toggle sidebar on mobile view.
let sidebarToggle = document.querySelector("#interior-sidebar-toggle");
let sidebarClose = document.querySelector("#interior-sidebar-close");
let sidebar = document.querySelector(".interior-sidebar");
let overlay = document.querySelector("#overlay");

sidebarToggle.addEventListener("click", () => {
  sidebar.classList.toggle("open");
  overlay.classList.toggle("open");
});

sidebarClose.addEventListener("click", () => {
  sidebar.classList.toggle("open");
  overlay.classList.toggle("open");
});

document.addEventListener("click", (event) => {
  if (
    !sidebar.contains(event.target) &&
    !sidebarToggle.contains(event.target)
  ) {
    if (
      sidebar.classList.contains("open") ||
      overlay.classList.contains("open")
    ) {
      sidebar.classList.remove("open");
      overlay.classList.remove("open");
    }
  }
});

// Js to implement smooth scroll to top.
let scrollToTopBtn = document.querySelector(".interior-scroll-to-top");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.documentElement.scrollTop > 500) {
    scrollToTopBtn.style.display = "flex";
  } else {
    scrollToTopBtn.style.display = "none";
  }
}

scrollToTopBtn.addEventListener("click", scrollToTop);

function scrollToTop() {
  window.scrollTo({ top: 0, behavior: "smooth" });
}
