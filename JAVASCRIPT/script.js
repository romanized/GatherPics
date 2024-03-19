$(document).ready(function() {
    $.scrollify({
        section: ".section",
        interstitialSection: ".footer", // This is where you specify the footer
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
});
