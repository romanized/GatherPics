$(document).ready(function() {
    // Scrollify configuration
    $.scrollify({
        section: ".section",
        interstitialSection: ".footer",
        sectionName: false,
        scrollbars: false,
        setHeights: false,
        overflowScroll: false,
        updateHash: false,
        scrollSpeed: 400,
        before: function(sectionIndex) {
            $(".pagination li").removeClass("active");
            $(".pagination li").eq(sectionIndex).addClass("active");
        },
        afterRender: function() {
            var pagination = "<ul class='pagination'>";
            $(".section").each(function(index) {
                pagination += "<li" + (index === 0 ? " class='active'" : "") + "></li>";
            });
            pagination += "</ul>";

            $("body").append(pagination);

            $(".pagination li").on("click", function() {
                $.scrollify.move($(this).index());
            });
        }
    });

    // Click event listener for the logo-container
    $('.logo-container').on('click', function() {
        // Add 'animate__animated' and 'animate__shakeX' classes to the container
        $(this).addClass('animate__animated animate__shakeX');

        // Remove the animation classes at the end of the animation
        $(this).one('animationend', function() {
            $(this).removeClass('animate__animated animate__shakeX');
        });
    });
});
