$(document).ready(function () {
  // Toggle sidebar width.
  $(".id-toggle-icon").on("click", function () {
    $(".id-sidebar").toggleClass("sidebar-open");
    $(".id-main").toggleClass("sidebar-open");
    this.classList.toggle("sidebar-close");
  });
});
