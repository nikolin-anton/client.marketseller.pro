jQuery(document).ready(function($) {
    $('.profile-menu__burger').on('click', function (e){

        if($(this).hasClass('profile-menu__burger--open')){
            $(this).removeClass('profile-menu__burger--open');
            $('.profile-menu__dropdown').removeClass('profile-menu__dropdown--collapsed');
        }else{
            $(this).addClass('profile-menu__burger--open');
            $('.profile-menu__dropdown').addClass('profile-menu__dropdown--collapsed');
        }
    });

    $('.form-input__eye').on('click', function (e){
        
        if($(this).prev().attr('type') == 'password') {
            $(this).prev().attr('type', 'text');
            $(this).attr("src", "../img/eye_on.png");
        } else {
            $(this).prev().attr('type', 'password');
            $(this).attr("src", "../img/eye_of.png");
        }

    });
});

