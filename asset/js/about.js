
$('.cont').on('click', function (e) {
    debugger;
    e.preventDefault();
    $('.contact').addClass('show');
    $('.click').removeClass('click');
    $(this).addClass('click');
})