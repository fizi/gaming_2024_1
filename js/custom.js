


$(function () { 

  // SITENAME colored 
  $(".navbar-brand .site-name").lettering("words");
  // MAIN MENU TITLE colored 
  $(".main-menubox .main-menubox-title h4.title-text").lettering("words");
  // RELEATED NEWS TITLE colored 
  $(".related-news-caption h2").lettering("words");
  // RELEATED CPAGE TITLE colored 
  $(".related-cpage-caption h2").lettering("words");
  // RELEATED CPAGE COMMENTS TITLE colored 
  $(".default-cpage-comments .default-cpage-comments-title h4.title-text").lettering("words");
  // WELCOME TITLE colored 
  $(".wm h1").lettering("words");
  
  
  
  // Delete comma from tags
  var tags = document.getElementsByClassName('view-item-tags');
  for(i=0;i<tags.length;i++)
  tags[i].innerHTML = tags[i].innerHTML.replace(/\,/g,'');
  
  
  // Delete html text from rate shortcode
  $('.default-news-rate div.e-rate').filter(function(){
    return $(this).html($(this).find('img'));
  });
  
  // Insert html elemens into the html of gallery
  $("<div class='gallery-item-overlay'><span class='eye'></span></div>").insertBefore(".gallery-item-box > a > img");
    
});

/* HIDE SHOW HEADER */
document.addEventListener("DOMContentLoaded", function(){

  el_autohide = document.querySelector('.autohide');
  
  // add padding-top to bady (if necessary)
  navbar_height = document.querySelector('#header').offsetHeight;
  document.body.style.paddingTop = navbar_height + 'px';

  if(el_autohide){
    var last_scroll_top = 0;
    window.addEventListener('scroll', function() {
          let scroll_top = window.scrollY;
         if(scroll_top < last_scroll_top) {
              el_autohide.classList.remove('scrolled-down');
              el_autohide.classList.add('scrolled-up');
          }
          else {
              el_autohide.classList.remove('scrolled-up');
              el_autohide.classList.add('scrolled-down');
          }
          last_scroll_top = scroll_top;
    }); 
    // window.addEventListener
  }
  // if

}); 
// DOMContentLoaded  end


