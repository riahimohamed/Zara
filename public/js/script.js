$(document).ready(function(){

    $('.message a').click(function(){
        $('Form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });

    $('input[type="file"]').on('change', function (event, files, label) {
        var file_name = this.value.replace(/\\/g, '/').replace(/.*\//, '')
        $('.upload-path').text(file_name);
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $(function(){
        $('.tab-section').hide();
        $('#tabs a').bind('click', function(e){
            $('#tabs a.current').removeClass('current');
            $('.tab-section:visible').hide();
            $(this.hash).show();
            $(this).addClass('current');
            e.preventDefault();
        }).filter(':first').click();
    });

        $('#logout').click(function() {
            window.location.reload();
        });

    current_page = document.location.href;

    $(".navbar-nav>li").removeClass('menu_active');

    if (current_page.match(/index/)) {
        $(".navbar-nav>li:eq(0)").addClass('menu_active');
    } else if (current_page.match('/page/activite/')) {
        $(".navbar-nav>li:eq(1)").addClass('menu_active');
    } else if (current_page.match('/page/formateur/')) {
        $(".navbar-nav>li.formateur").addClass('menu_active');
    } else if (current_page.match('/page/temps/')) {
        $(".navbar-nav>li:eq(3)").addClass('menu_active');
    } else if (current_page.match('/page/notif/')) {
        $(".navbar-nav>li:eq(4)").addClass('menu_active');
    }else if (current_page.match('/page/contact/')) {
        $(".navbar-nav>li.contact").addClass('menu_active');
    }else if (current_page.match('/page/register/')) {
        $(".navbar-nav>li:eq(3)").addClass('menu_active');
    } else { // don't mark any nav links as selected
        $(".navbar-nav>li").removeClass('menu_active');
    };

});
