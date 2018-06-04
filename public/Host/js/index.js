$(function () {
    $("#slider").responsiveSlides({
    auto: true,
    pager: true,
    nav: true,
    speed: 500,
     namespace: "rslides"
    });
});

$(".Features dl").rotate({ 
   bind: 
     { 
        mouseover : function() { 
            $(this).find("img").rotate({animateTo:360,angle:0});
        },
        mouseout : function() { 
            $(this).find("img").rotate({animateTo:0});
        }
     } 
 });

  
$('.webServic li').hover(
  function(){
    $(this).css('width','100%');
	$(this).find('.webtxt').stop().show(500);
	$(this).siblings().hide();
 	  },
  function(){
     $(this).css('width','102px');
	 $(this).find('.webtxt').hide(); 
	 $(this).siblings().stop().show(500); 
 	  })
 
 
 
$('.sale ul.saleCon').anoSlide(
{
	items: 1,
	speed: 500,
	auto:6000,
  	lazy: true,
	onConstruct: function(instance)
	{
		var paging = $('<div/>').addClass('saleNav').css(
		{
			position: 'absolute',
			bottom: 20,
			left:50 + '%',
			width: instance.slides.length * 40,
			marginLeft: -(instance.slides.length * 40)/2
		})
		
		/* Build paging */
		for (i = 0, l = instance.slides.length; i < l; i++)
		{
			var a = $('<a/>').data('index', i).appendTo(paging).on(
			{
				click: function()
				{
					instance.stop().go($(this).data('index'));
				}
			});
			
			if (i == instance.current)
			{
				a.addClass('on');
			}
		}
 		instance.element.parent().append(paging);
	},
	onStart: function(ui)
	{
		var paging = $('.saleNav');
		
		paging.find('a').eq(ui.instance.current).addClass('on').siblings().removeClass('on');
	}
})

$('.custom ul').anoSlide(
{
	items: 4,
	speed: 500,
	prev: '.custom a.previous',
	next: '.custom a.nexts',
	lazy: false,
	delay: 100
}) 

$('.case ul').anoSlide(
{
	items: 1,
	speed: 500,
	prev: '.case a.previous',
	next: '.case a.nexts',
	lazy: true,
	delay: 100
}) 
	  