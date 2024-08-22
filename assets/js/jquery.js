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

  // Toggle sidebar width.
  $(".id-toggle-icon").on("click", function () {
    $(".id-sidebar").toggleClass("sidebar-open");
    $(".id-main").toggleClass("sidebar-open");
    this.classList.toggle("sidebar-close");
  });
});
