$(document).ready(function (e) {
    $('.thumbnailss').click(function (e) {
        $('#main_img').attr('src', $(this).attr('src'));
    });
});