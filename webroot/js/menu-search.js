$(document).ready(function () {
    var collapseMenu = true;

    $("#sideMenuSearchField").keyup(function () {

        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val();

        $('#side-menu').unhighlight();
        if (filter != '') {
            $('#side-menu').highlight(filter);
            if (collapseMenu) {
                $('#side-menu .nav-second-level, #side-menu .nav-third-level').each(function() {
                    if (!$(this).hasClass('collapse in')) {
                        $(this).collapse("toggle");
                        $(this).parent("li").toggleClass("active");
                    }
                });
                collapseMenu = false;
            }
        } else {
            collapseMenu = true;
            $('#side-menu .nav-second-level, #side-menu .nav-third-level').each(function() {
                if ($(this).hasClass('collapse in')) {
                    $(this).collapse("toggle");
                    $(this).parent("li").toggleClass("active");
                }
            });
        }

        // Loop through the list
        $("#side-menu li").each(function () {

            if ($(this).hasClass('sidebar-search')) {
                return;
            }

            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
            } else {
                $(this).show();
            }
        });

    });
});