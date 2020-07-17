<footer id="pageSay" class="main-footer">
    <div class="main-content  clearfix">
        

        <div class="copy-right">
            <p>You think it's time for us to talk about<br> your ideas and projects?
                <br>Come and say <span class="hd-t">hello</span>
            </p>
			<form class="form-say  clearfix" action="#">
				<input type="text" placeholder="Message...">
				<input type="text" placeholder="Name or email ...">
				<input class="hd-t" type="submit" value="">
			</form>

            <p class="copy-text">&copy; 2014 Crush On Me Group, Bangkok, Thailand. All Rights Reserved.</p>
        </div>

		<div class="contact-us">
            <h1>Contact</h1>

            <p>Crush On Me Group Company Limited</p>

            <address>
                <ul>
                    <li>Bangkok, Thailand</li>

                    <li>Tel. (66) 854 496 663</li>

                    <li>Email : tanakorn@crushonme-group.com</li>

                    <li>Facebook.com/Crush.On.Me.Bangkok</li>
                </ul>
            </address>
        </div>
    </div>
</footer>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/caroufredsel/jquery.carouFredSel-6.2.0-packed.js"></script>
<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
<script type="text/javascript">
    /* menu click slide to */
    

    var canScroll;
    function scrollToId(id, speed) {
        if (!canScroll) {
            canScroll = true;
			if(windowWidth>765){
				var offSet = 70;
			}else{
				var offSet = 37;
			}
            
            var targetOffset = $(id).offset().top - offSet;
            $('html,body').animate({
                scrollTop: targetOffset
            }, speed, function() {
                canScroll = null;
            });
        }
    }

    /* menu click slide to footer */
    function scrollToBottom() {
        if (!canScroll) {
            canScroll = true;
            var offSet = 70;
            var targetOffset = $('body').height();
            $('html,body').animate({
                scrollTop: targetOffset
            }, 750, function() {
                canScroll = null;
            });
        }
    }

    /* check menu active when scroll to target */
    if ($('#pageOnline').offset()) {
        var targetTopPageOnline = $('#pageOnline').offset().top - 87;
        var targetTopPagePortfolio = $('#pagePortfolio').offset().top - 87;
        var targetTopPageService = $('#pageService').offset().top - 87;
        var targetTopPageClients = $('#pageClients').offset().top - 87;
		var targetForAnimate = $('#pagePortfolio').height() / 2;
		var footerHeight = $('#pageSay').height();
    }

    function menuActive() {
        var windowTop = $(window).scrollTop();
		
        if (windowTop > targetTopPageOnline && windowTop < targetTopPagePortfolio) {

            $('#mainHeader li a').removeClass('active');
            $('#mainHeader li').eq(0).find('a').addClass('active');
        } else if (windowTop > targetTopPagePortfolio && windowTop < targetTopPageService) {

            $('#mainHeader li a').removeClass('active');
            $('#mainHeader li').eq(1).find('a').addClass('active');
        } else if (windowTop > targetTopPageService && windowTop < targetTopPageClients) {

            $('#mainHeader li a').removeClass('active');
            $('#mainHeader li').eq(2).find('a').addClass('active');
        } else if (windowTop > targetTopPageClients && windowTop < targetTopPageClients + 170) {

            $('#mainHeader li a').removeClass('active');
            $('#mainHeader li').eq(3).find('a').addClass('active');
        } else if (windowTop > $('body').height() - footerHeight) {

            $('#mainHeader li a').removeClass('active');
            $('#mainHeader li').eq(4).find('a').addClass('active');
        } else {

            $('#mainHeader li a').removeClass('active');
        }
    }

    /* add class animate each section */
    function animateSection() {
		console.log('do');
        var windowTop = $(window).scrollTop();
        if (windowTop > targetTopPagePortfolio + targetForAnimate) {
            $('#pageService').addClass('target-animate');
        }

    }
	
	/* parallax */
	var windowWidth = $(window).width();
	if(windowWidth>485){
		$(window).stellar({
			verticalOffset: 0
		});
	}
	
    /* begin script */
    $(function() {
		
		



        setTimeout(function() {
            $('#jsGraphAnimate').addClass('js-animate-graph');
        }, 500);
        
        var mainHeader = $('#mainHeader');
        
        /* add class animate each section */
		if(windowWidth>485){
			animateSection();
		}else{
			$('#pageService').addClass('target-animate');
		}
        
        
        if(windowWidth<765){
			/* mobile menu */
			$('#openMobileMenu').bind('click',function(e){
				e.preventDefault();
				$('#mainNav').slideToggle('400').find('a').bind('click',function(){
					$('#mainNav').slideUp();
				});

			});
		}
        
        /* check on window scroll */
        $(window).scroll(function() {
            var windowScroll = $(window).scrollTop();
            if (windowScroll > 0) {
                mainHeader.addClass('main-header__act');
            } else {
                mainHeader.removeClass('main-header__act');
            }
            /* check menu active when scroll to target */
            menuActive();
            /* add class animate each section */
            animateSection();
        });
        
        /* action when menu click */
        $('.js-scroll-to').bind('click', function(event) {
            event.preventDefault();
            var sectionID = $(this).attr('data-id');
            scrollToId('#' + sectionID, 750);
        });
        $('.js-scroll-to-bottom').bind('click', function(event) {
            event.preventDefault();
            scrollToBottom();
        });





        /* make slide portfolio*/
        $('#slidePort').carouFredSel({
            width: "100%",
            responsive: true,
            /*auto: {
             timeoutDuration: 5000
             },*/
            auto: false,
            scroll: {
                fx: 'crossfade',
                duration: 400
            },
            swipe: {
                onTouch: true,
                onMouse: true
            },
            items: {
                visible: {
                    min: 1,
                    max: 3
                }
            },
            prev: '.port-content__nav .prev',
            next: '.port-content__nav .next',
            pagination: {
                anchorBuilder: function(nr) {
					if(windowWidth>760){
						return '<li><a class="hd-t" href="#">' + nr + '</a></li>';
					}
                    
                },
                container: ".port-content__pag"
            }
        });
    });
    
    
	
	
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-30242528-1', 'crushonme-group.com');
  ga('send', 'pageview');

</script>
