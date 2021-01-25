jQuery(document).ready(function($){
  //open and close child element in menu
  $('.menu-item-has-children .menu-item-title-wrap').click(function(){
    console.log('parent clicked');
    $(this).closest('li').find('.caret-wrap').toggleClass('dropdown-open');
    $(this).closest('li').find('ul.sub-menu').toggleClass('dropdown-open');
  });

  //var definition for MutationObserver
  var changingContainer = $('.soliloquy-viewport');
  const config = { attributes:true};
  observer.observe(changingContainer, config);
  console.log('registered');
});

//defining function outside of document ready
var observer = new MutationObserver(function (mutationRecords, observer) {
    mutationRecords.forEach(function (mutation) {
        console.log("mutation change in ", mutation.type, " name: ",mutation.target);
    });
});
