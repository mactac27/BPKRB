jQuery(document).ready(function($){
  if(window.location.pathname == "/BPKRB/wordpress/"){
  $('.search span').click(function(){
    if($(".bar").hasClass("grow"))
      $(".bar").removeClass("grow");
    else
      $(".bar").addClass("grow");
  });

  $('#back-to-top').on('click', function (e) {
    e.preventDefault();
    $('html,body').animate({
        scrollTop: 0
    }, 1500);
  });

  $('.icon-scroll').on('click', function (e) {
    e.preventDefault();
    $('html,body').animate({
        scrollTop: $("#content").offset().top - 60
    }, 1500);
  });



  $('.liked').owlCarousel({
    margin:0,
    nav:true,
    navText : ['<i class="fa fa-arrow-left" aria-hidden="true"></i>','<i class="fa fa-arrow-right" aria-hidden="true"></i>'],
    autoWidth:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:true
        },
        1000:{
            items:5,
            nav:true
        }
      }
  });

  $('.fw').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    navText : ['<i class="fa fa-arrow-left" aria-hidden="true"></i>','<i class="fa fa-arrow-right" aria-hidden="true"></i>'],
    autoWidth:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:true
        },
        1000:{
            items:5,
            nav:true
        }
      }
  });

  var userFeed = new Instafeed({
    get: 'user',
    userId: '298403604',
    accessToken: '298403604.c471e94.8bee84ff502c45b2bda9db92fc9c5eea',
    template: '<div class="item"><a href="{{link}}"><img style="width:100%; height:100%;" src="{{image}}" /><div class="olay"></div></a></div>',
    after: function () {
     var owl = $('#owl2row-plugin');
     $('.insta').owlCarousel({
       loop:true,
       margin:0,
       nav:false,
       autoWidth:true,
       responsiveClass:true,
       responsive:{
           0:{
               items:1,
               nav:true
           },
           600:{
               items:3,
               nav:false
           },
           1000:{
               items:5,
               nav:false,
               loop:true
           }
         }
     });
 }
  });
  userFeed.run();


  var h =  2*$('#nav').height();
  $(document).on('scroll', function() {
    if($(this).scrollTop()>=($('#nav').position().top + h)){
        if(!$('.sticky').hasClass('show')){
          $('.sticky').addClass('show');
          $('.sticky .logo').addClass('animated fadeInDown');
          $('.sticky .search span').addClass('animated fadeInDown');
          $('.sticky nav').addClass('animated fadeInDown');

        }
    }else{
      if($('.sticky').hasClass('show')){
        $('.sticky').removeClass('show');
        $('.sticky .logo').removeClass('animated fadeInDown');
        $('.sticky .search span').removeClass('animated fadeInDown');
        $('.sticky nav').removeClass('animated fadeInDown');
      }
    }
  })
}
});
