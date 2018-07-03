$(document).ready(function () {
    setTimeout(function(){
        $('.loadingPage').fadeOut();
    },100);


    window.onscroll = function(){
        
		if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        	$('.headerTiny').slideDown();
            $('.btnScrollTop').css('bottom','20px');
	    } else {
	        $('.headerTiny').slideUp();
            $('.btnScrollTop').css('bottom','-120px');
	    }
	};
	if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        $('.headerTiny').slideDown();
        $('.btnScrollTop').css('bottom','20px');
    } else {
        $('.headerTiny').slideUp();
        $('.btnScrollTop').css('bottom','-120px');
    }

    setTimeout(function(){
        $('.masterError').fadeOut();
    },2000);



    $(document).on('click', ".iconSearch", function(){
        $(".headerSearch").css({"display": "block", "width": "540px"});
        $('.headerTopMenuItem').fadeOut(100);
        $('.iconSearch').fadeOut();

    });
    $(document).on('focusout', ".inputSearch", function(){
        $(".headerSearch").css({"display": "block", "width": "52px"});
        $(".inputSearch").val("");
        setTimeout(function(){
            $(".headerSearch").css('display','none');
            $('.headerTopMenuItem').fadeIn();
            $('.iconSearch').fadeIn();
        }, 500)
        
    });

    $(document).on('click', ".btnScrollTop, .footerTopItemBtnScrollTop", function(){
       $('html, body').animate({
          scrollTop: 0
        }, 1000);
    });

    $(document).on('click', ".btnSearchHeadTiny", function(){
        $(".headerSearchTiny").css({"display": "block", "width": "240px"});
        

    });
    $(document).on('focusout', ".headerSearchTiny", function(){
        
        $(".headerSearchTiny").css({"display": "block", "width": "52px"});
        $(".inputSearch").val("");
        setTimeout(function(){
            $(".headerSearchTiny").css('display','none');
        }, 500)
        

    });

    $(document).on('click', ".giftShow", function(){
        $(".giftShow").toggle();
        $(".giftHide").toggle();
        
    });
    $(document).on('click', ".giftHideBtn", function(){
        $(".giftShow").toggle();
        $(".giftHide").toggle();
        
    });
});