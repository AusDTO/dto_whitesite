jQuery(document).ready(function() {
    jQuery('.mobile-nav').click(function() {
        jQuery('body').toggleClass('show');
    });
	jQuery('.menu-open').click(function() {
        jQuery('body').removeClass('show');
   	});
});


twttr.events.bind('rendered',function(){
  [].slice.call(document.querySelectorAll('iframe.twitter-timeline')).forEach(function(e,i,a){
    var fE = e.contentDocument.getElementsByClassName('timeline');
    if(fE.length){
      fE[0].style.maxWidth='720px';
    }
  });
});