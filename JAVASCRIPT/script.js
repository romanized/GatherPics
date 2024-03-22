$(document).ready(function () {

    $.scrollify({
        section: ".section",
        interstitialSection: ".footer",
        sectionName: false,
        scrollbars: false,
        setHeights: false,
        overflowScroll: false,
        updateHash: false,
        before: function (sectionIndex) {
            $(".pagination li").removeClass("active");
            $(".pagination li").eq(sectionIndex).addClass("active");
        },
        afterRender: function () {
            var pagination = "<ul class='pagination'>";
            $(".section").each(function (index) {
                pagination += "<li" + (index === 0 ? " class='active'" : "") + "></li>";
            });
            pagination += "</ul>";

            $("body").append(pagination);

            $(".pagination li").on("click", function () {
                $.scrollify.move($(this).index());
            });
        }
    });


    $('.logo-container').on('click', function () {

        $(this).addClass('animate__animated animate__shakeX');


        $(this).one('animationend', function () {
            $(this).removeClass('animate__animated animate__shakeX');
        });
    });
});


const cameraicon = document.querySelector('.cameraicon');
const personicon = document.querySelector('.personicon');
const text_2 = document.querySelector('.text-2');

// Add a mouseover event listener
cameraicon.addEventListener('mouseenter', () => {
    document.querySelector('.text-2').innerHTML = 'op met een Digitale Camera';
    text_2.classList.add('animate__animated', 'animate__headShake');
    setTimeout(() => {
        text_2.classList.remove('animate__animated', 'animate__headShake');
    }, 400);
});

cameraicon.addEventListener('mouseleave', () => {
    document.querySelector('.text-2').innerHTML = 'op met GatherPics';
    text_2.classList.add('animate__animated', 'animate__headShake');
    setTimeout(() => {
        text_2.classList.remove('animate__animated', 'animate__headShake');
    }, 400);
});

personicon.addEventListener('mouseenter', () => {
    text_2.innerHTML = 'op met een Groep';
    text_2.classList.add('oranje');
    text_2.classList.add('animate__animated', 'animate__headShake');
    setTimeout(() => {
        text_2.classList.remove('animate__animated', 'animate__headShake');
    }, 400);
} );

personicon.addEventListener('mouseleave', () => {
    text_2.innerHTML = 'op met GatherPics';
    text_2.classList.remove('oranje');
    text_2.classList.add('animate__animated', 'animate__headShake');
    setTimeout(() => {
        text_2.classList.remove('animate__animated', 'animate__headShake');
    }, 400);
}
);