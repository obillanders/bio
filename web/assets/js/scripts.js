
    
    /* Menu pharmacien */
    if ($('.main_menu').length > 0) {
        $('.mm-root-link').on('click', function (e) {
            
            if ($(this).next('.mm-ssmenu').length > 0) {
                e.preventDefault();
                var $this = $(this);
                var $linkInside = $this.children('.mm-root-link-inside');
                var $ssMenu = $this.next('.mm-ssmenu');
                
                $('.mm-root-link').not($this).each(function () {
                    if ($(this).children('.mm-root-link-inside').hasClass('fadeOut')) {
                        $(this).children('.mm-root-link-inside').removeClass('fadeOut');
                        $(this).next('.mm-ssmenu').removeClass('mm-ssmenu-open');
                    }
                });
                
                $linkInside.toggleClass('fadeOut');
                $ssMenu.toggleClass('mm-ssmenu-open');
                
            }
        });
        
        $('.mm-ssmenu-close').on('click', function () {
            $('.mm-root-link-inside').removeClass('fadeOut');
            $('.mm-ssmenu').removeClass('mm-ssmenu-open');
        });
        
        // Mobile menu
        $('.hdr-menu_toggle').on('click', function () {
            $('.main_menu').addClass('mm-open');
            $('.mm-overlay').fadeIn(300);
        });
        $('.mm-toggle-ic, .mm-overlay').on('click', function () {
            $('.main_menu').removeClass('mm-open');
            $('.mm-overlay').fadeOut(300);
            
            $('.mm-root-link-inside').removeClass('fadeOut');
            $('.mm-ssmenu').removeClass('mm-ssmenu-open');
        });
       
    }
    
    
    






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

//# sourceMappingURL=scripts.js.map
