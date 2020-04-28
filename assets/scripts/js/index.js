$(document).ready(function () {
    console.log("Estoy aquí");
    $('.change-login-for-register').click(function (e) { 
        e.preventDefault();
        $('.form-main-register-container').toggleClass('form-register-active');
        $('.form-main-login-container').toggleClass('form-login-hide');
    });

    $('.change-register-for-login').click(function (e) { 
        e.preventDefault();
        $('.form-main-register-container').toggleClass('form-register-active');
        $('.form-main-login-container').toggleClass('form-login-hide');
    });
});