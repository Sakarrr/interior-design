$(document).ready(function () {
  // Add loader.
  document.onreadystatechange = function () {
    if (document.readyState !== "complete") {
      $("body").css({ visibility: "hidden" });
      $(".id-loader-container").css({ visibility: "visible" });
    } else {
      $(".id-loader-container").css({ visibility: "hidden" });
      $("body").css({ visibility: "visible" });
    }
  };

  // Js to toggle sidebar on mobile view.
  let sidebarToggle = $("#id-sidebar-toggle");
  let sidebarClose = $("#id-sidebar-close");
  let sidebar = $(".id-mob-sidebar");
  let overlay = $("#id-overlay");

  sidebarToggle.on("click", () => {
    sidebar.toggleClass("open");
    overlay.toggleClass("open");
  });

  sidebarClose.on("click", () => {
    sidebar.toggleClass("open");
    overlay.toggleClass("open");
  });

  $(document).on("click", (event) => {
    if (
      !sidebar.is(event.target) && // Check if the target is not the sidebar itself
      !sidebar.has(event.target).length && // Check if the target is not a child of the sidebar
      !sidebarToggle.is(event.target) && // Check if the target is not the sidebar toggle button
      !sidebarToggle.has(event.target).length // Check if the target is not a child of the toggle button
    ) {
      if (sidebar.hasClass("open") || overlay.hasClass("open")) {
        sidebar.removeClass("open");
        overlay.removeClass("open");
      }
    }
  });

  // Js to implement smooth scroll to top.
  let scrollToTopBtn = $(".id-scroll-to-top");

  window.onscroll = function () {
    scrollFunction();
  };

  function scrollFunction() {
    if (document.documentElement.scrollTop > 250) {
      scrollToTopBtn.css({ display: "flex" });
    } else {
      scrollToTopBtn.css({ display: "none" });
    }
  }

  scrollToTopBtn.click(scrollToTop);

  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: "smooth" });
  }

  // Clone and append menu items.
  let primaryMenu = $(".primary-menu");
  let mobileMenuContainer = $(".mobile-menu");
  let navBarContainer = $(".nav-menu");

  let primaryMenuItems = primaryMenu.find("li");

  primaryMenuItems.each(function () {
    mobileMenuContainer.append($(this).clone(true));
    navBarContainer.append($(this).clone(true));
  });

  // Toggle sidebar width.
  $(".id-toggle-icon").on("click", function () {
    $(".id-sidebar").toggleClass("sidebar-open");
    $(".id-main").toggleClass("sidebar-open");
    this.classList.toggle("sidebar-close");
  });
});

// Scroll reveal.
ScrollReveal().reveal(".id-showcase", { delay: 500 });
ScrollReveal().reveal(".id-services", { delay: 500 });
ScrollReveal().reveal(".id-designers", { delay: 500 });
ScrollReveal().reveal(".id-packages", { delay: 500 });
ScrollReveal().reveal(".id-contact", { delay: 500 });
ScrollReveal().reveal(".id-footer", { delay: 500 });
