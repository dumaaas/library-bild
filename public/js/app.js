$("#hamburger-menu").click(function (e) {
    e.preventDefault();
    $("#sidebar").toggleClass("active");
    $(".sidebar-item").toggleClass("inline hidden");
});