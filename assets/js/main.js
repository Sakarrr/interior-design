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
  console.log(event);
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
