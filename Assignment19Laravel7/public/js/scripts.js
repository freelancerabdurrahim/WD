
$(document).ready(function(){
	$('.multi-icon a i').hover(function(){
		$('.clickpath').addClass('new-clickpath');
	})

	
       $('.pie_progress').asPieProgress({
        namespace: 'pie_progress'
      });

       $('.pie_progress').asPieProgress('start');


       // magnificPopup
       $('.works-popup').magnificPopup({
       	type:'image',
       	gallery:{
		    enabled:true
		  }
       });
       // countUP
       $('.company-single-conut h1').counterUp({
	       	delay: 10,
	  	   time: 1000
       });
     // owl-carousel
     $('.testimonial-area').owlCarousel({
        items:1,
        loop:true,
        dots:false,
        nav:true,
        navText:['<i class="fas fa-caret-left"></i>','<i class="fas fa-caret-right"></i>']
     });

     // owl-carousel team-client-area
    $('.team-client-area').owlCarousel({
        items:4,
        loop:true,
        dots:false,
        nav:true,
        navText:['<i class="fas fa-caret-left"></i>','<i class="fas fa-caret-right"></i>'],
       responsiveClass:true,
        responsive:{
                991 :{
                    items:4
                },

                768 :{
                    items:3
                },
                576 :{
                    items:2
                },
                  320 :{
                    items:1
                }
        }
     });


    // owlCarousel logo client
    // owl-carousel
     $('.client-area').owlCarousel({
        items:4,
        loop:true,
        dots:false,
        responsiveClass:true,
        responsive:{
                991 :{
                    items:4
                },

                768 :{
                    items:3
                },
                576 :{
                    items:2
                },
                  320 :{
                    items:2
                }
        }
     });
      
     // scroll con
     $(window).scroll(function(){
      var scrollvalu=$(this).scrollTop();
      // $('.header-menu').text(scrollvalu);
      if(scrollvalu>510){
        $('.menu-area-section').addClass('fixedclass');
      }else{
         $('.menu-area-section').removeClass('fixedclass');
      }
     })



    // Back to top
    $('.bact-to-top').click(function(){
        $('html,body').animate({
          scrollTop :0
        },5000);

        return false;
    })


    // search-icon
    $('.serch-icon a i').click(function(){
      $('.serch-icon input').slideToggle(300);

      return false;
    })


    // mobile-icon
    
   $('.bars-icon').click(function(){
      $('.header-menu ul').slideToggle(1000);

      return false;
   })


    



	
})