
    $(document).ready(function() {
        $('.addcart').hide();
        $('.small-pic').click(function() {
            $('.large-pic').html($(this).html());
            $('.small-pic').addClass('blind');
            if ($('.large-pic').html() == $(this).html()) {
                $(this).removeClass('blind');
            }
        });
        $('.btn-addcart').click(function() {
            var number = parseInt($('.number').text()) + 1;
            var price = parseInt($('.price').text()) + 95;
            $('.number').text(number);
            $('.price').text(price);
            $('.addcart').fadeIn().delay(5000).fadeOut();
        });
    });