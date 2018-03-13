$(document).ready(function() {
    $('.flash-msg').delay(2000).fadeOut(350);
});
$('.birth').focusout(function(){
    var age = Math.floor(moment(new Date()).diff(moment($('.birth').val(),"YYYY-MM-DD"),'years',true));
    $('.age').val(age);
})