$('#register').on('click', function (e) {

    doWork(e,this);
    $('.active').removeClass('active');
    $('.register').addClass('active');

})
$('.go-register').on('click', function (e) {
    $('.active').removeClass('active');
    $('.register').addClass('active');
    doWork(e);
})
$('.go-login').on('click', function (e) {
    $('.active').removeClass('active');
    $('.login').addClass('active');
    doWork(e);
})

$('#login').on('click', function (e) {
   doWork(e);
    $('.active').removeClass('active');
    $('.login').addClass('active');
})
function  doWork(e,target){
    e.preventDefault();
    if(!$('.center').hasClass('mask')) {
        $('.center').addClass('mask');
    }
    if(!$('.login-register').hasClass('do')){
        $('.login-register').addClass('do');
    }
}

//传参数接口
