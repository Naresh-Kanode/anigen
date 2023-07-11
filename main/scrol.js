    $(document).ready(function () {
        $(window).scroll(function () {
            $('.animate-on-scroll').each(function () {
                var position = $(this).offset().top;
                var scrollPosition = $(window).scrollTop() + $(window).height();

                if (scrollPosition > position) {
                    $(this).addClass('animate');
                }
            });
        });
    });

    //back to top page btn
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 200) {
                $("#back-to-top-btn").addClass("active");
            } else {
                $("#back-to-top-btn").removeClass("active");
            }
        });

        $("#back-to-top-btn").click(function () {
            $("html, body").animate({ scrollTop: 0 }, 100);
        });
    });

    //loading on home page
    window.addEventListener("load", function () {
        var loadingScreen = document.getElementById("loading-screen");

        setTimeout(function () {
            loadingScreen.classList.add("hide-loading");
        }, 5000);
    });
