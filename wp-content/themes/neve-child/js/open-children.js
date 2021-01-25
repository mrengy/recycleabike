jQuery(document).ready(function($){
  //open and close child element in menu
  $('.menu-item-has-children .menu-item-title-wrap').click(function(){
    console.log('parent clicked');
    $(this).closest('li').find('.caret-wrap').toggleClass('dropdown-open');
    $(this).closest('li').find('ul.sub-menu').toggleClass('dropdown-open');
  });

  //resize container for image slider
  let $changingContainer = $('.soliloquy-viewport');

  const observer = new MutationObserver((ml, o) => {
    for (const m of ml) {
      console.log('The ' + m.attributeName + ' attribute was modified.');
    }
  });

  observer.observe($changingContainer[0], {
    attributes: true,
    subtree: false
  });
});
