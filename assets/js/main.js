// Add loader.
document.onreadystatechange = function () {
  if (document.readyState !== "complete") {
    document.querySelector("body").style.visibility = "hidden";
    document.querySelector(".id-loader-container").style.visibility = "visible";
  } else {
    document.querySelector(".id-loader-container").style.visibility = "hidden";
    document.querySelector("body").style.visibility = "visible";
  }
};

// Js to toggle sidebar on mobile view.
let sidebarToggle = document.querySelector("#id-sidebar-toggle");
let sidebarClose = document.querySelector("#id-sidebar-close");
let sidebar = document.querySelector(".id-mob-sidebar");
let overlay = document.querySelector("#id-overlay");

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
let scrollToTopBtn = document.querySelector(".id-scroll-to-top");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.documentElement.scrollTop > 250) {
    scrollToTopBtn.style.display = "flex";
  } else {
    scrollToTopBtn.style.display = "none";
  }
}

scrollToTopBtn.addEventListener("click", scrollToTop);

function scrollToTop() {
  window.scrollTo({ top: 0, behavior: "smooth" });
}

// Clone and append menu items.
let primaryMenu = document.querySelector(".primary-menu");
let mobileMenuContainer = document.querySelector(".mobile-menu");
let navBarContainer = document.querySelector(".nav-menu");

let primaryMenuItems = primaryMenu.querySelectorAll("li");

primaryMenuItems.forEach(function (menuItem) {
  mobileMenuContainer.appendChild(menuItem.cloneNode(true));
});

let sidebarOpenBtn = document.querySelector(".id-toggle-icon");

sidebarOpenBtn.addEventListener("click", function () {
  console.log("clicked");
  document.querySelector(".id-sidebar").classList.toggle("sidebar-open");
  document.querySelector(".id-main").classList.toggle("sidebar-open");
  document.querySelector(".id-toggle-icon").classList.toggle("sidebar-close");
});
