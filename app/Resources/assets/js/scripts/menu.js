
    
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
    
    
    





