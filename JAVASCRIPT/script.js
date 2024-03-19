$(document).ready(function() {
    // Scrollify configuratie
    $.scrollify({
        section: ".section",
        interstitialSection: ".footer",
        sectionName: false,
        scrollbars: false,
        setHeights: false,
        overflowScroll: false,
        updateHash: false,
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

    // Click event listener voor de logo-container
    $('.logo-container').on('click', function() {
        // Voeg 'animate__animated' en 'animate__shakeX' klassen toe aan de container
        $(this).addClass('animate__animated animate__shakeX');

        // Verwijder de animatie klassen na het einde van de animatie
        $(this).one('animationend', function() {
            $(this).removeClass('animate__animated animate__shakeX');
        });
    });
});
