// $("#hamburger-menu").click(function (e) {
//     e.preventDefault();
//     $("#sidebar").toggleClass("active");
//     $(".sidebar-item").toggleClass("inline hidden");
// });

//open and close hamburger menu
  $(function () {
    var hamburger = $('#hamburger');
    var sidebar = $('.sidebar');
    hamburger.on('click', function () {
      if (sidebar.hasClass('active')) {
        sidebar.removeClass('active');
        hamburger.removeClass('change');
        $(".sidebar-item").addClass("hidden");
        $(".sidebar-item").removeClass("inline");
      } else {
        sidebar.addClass('active');
        hamburger.addClass('change');
        $(".sidebar-item").removeClass("hidden");
        $(".sidebar-item").addClass("inline");

      }
    });
  });