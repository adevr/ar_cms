/**
 * ********************
 * função ver password
 * ********************
 */
function seePass() {
    if (password.type == 'text') password.type = 'password';
    else password.type = 'text';
}

/**
 * change active status
 * @param id
 */

/*
function changeActive(id) {
    var element = document.querySelector('.active');
    element.classList.remove('active');
    document.getElementById(id).classList.add('active');
}


var linkElements = document.querySelectorAll('li');
for (var i = 0; i < linkElements.length; i++) {
    var element = linkElements[i];
    element.addEventListener('click', function (e) {
        // base da função
        var clss = document.querySelector('.active');
        clss.classList.remove('active');
        document.getElementById(e).classList.add('active');
    });
}
*/

$(document).ready(function () {

    $("#main-menu li a").on('click', function () {
        var clicked = $(this);

        $("#main-menu li a.active").removeClass('active');
        clicked.addClass('active');
    });

    $(".toggle").click(function () {
        $(this).parent().children("ul").slideToggle(300);
    });


    $( ".dropdown" ).click(function() {
        //alert($( this ).css( "transform" ));
        if (  $(this).find( ".icon-down-chevron" ).css( "transform" ) == 'none' ){
            $(this).find(".icon-down-chevron").css("transform","rotate(-180deg)");

        } else {
            $(this).find(".icon-down-chevron").css("transform","" );
        }
    });



    $(".icon-drop").click(function () {
        var nav = $(".navbar-left");
        var prof = $(".navbar-profile");
        var header = $(".navbar-header");
        var mainMenu = $("#main-menu");
        nav.toggleClass("white");
        prof.toggleClass("white2");
        header.toggleClass("white");
        mainMenu.toggleClass("white");

        $(".user-info a").css("color", "#b3bcc5");

    });

});