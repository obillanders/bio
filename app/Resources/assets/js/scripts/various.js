// Profile mobile
if ($('.hdr-profile_toggle').length > 0) {
    $('.hdr-profile_toggle').on('click', function () {
        $('.hdr-user_box').addClass('hdr-user_box-mobile-open');
    });
    $('.logout-mobile-header-ic').on('click', function () {
        $('.hdr-user_box').removeClass('hdr-user_box-mobile-open');
    });
}

// Style checkboxes
$('input').iCheck();

// Styles select
if ($('select').length > 0 /*&& typeof input_label != 'undefined'*/) {
    $('select').selectric({
        labelBuilder: function(currItem){
           return currItem.index > 0 ? '<span>'+currItem.text+'</span>' : currItem.text;
        }
    });
}

if ($('#hdr-usr_box-listofficines').length > 0) {
    $('#hdr-usr_box-listofficines').selectric({
        optionsItemBuilder: '<span class="ic-city selectric-leftcol"></span><span class="selectric-rightcol">{text}</span>',
        labelBuilder: '<span class="ic-city"></span> {text}',
    });
}

// Prehome mobile
if ($('.ph-connexion_link-mobile').length > 0) {
    $('.ph-connexion_link-mobile').on('click', function () {
        $('body').animate({'scrollTop': $('#mobile-connexion').offset().top});
    });
}

$("#hdr-usr_box-listofficines").change(function(){
    console.log("change officine");
    $("#formSelectOfficine").submit();
});
