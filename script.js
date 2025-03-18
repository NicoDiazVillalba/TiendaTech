$(document).ready(function () {
    var btnScrollTop = $('#btn-scroll-top');


    $(window).scroll(function () {
        if ($(window).scrollTop() > 200) {
            btnScrollTop.addClass('show');
        } else {
            btnScrollTop.removeClass('show');
        }
    });

    btnScrollTop.click(function () {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
    });
});

$(document).ready(function () {
    $(".nav-item a").click(function (e) {
        e.preventDefault();
        var target = $(this).attr("href");
        $("html, body").animate({ scrollTop: $(target).offset().top }, "slow");
    });
});

$(document).ready(function () {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get("registro") === "exitoso") {
        alert("Registro exitoso");
    } else if (urlParams.get("registro") === "duplicado") {
        alert("Error: Este correo ya está registrado.");
    } else if (urlParams.get("registro") === "error") {
        alert("Error al registrar, intenta de nuevo.");
    }
});