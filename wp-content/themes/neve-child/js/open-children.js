jQuery(document).ready(function($){
  //open and close child element in menu
  $('.menu-item-has-children .menu-item-title-wrap').click(function(){
    console.log('parent clicked');
    $(this).closest('li').find('.caret-wrap').toggleClass('dropdown-open');
    $(this).closest('li').find('ul.sub-menu').toggleClass('dropdown-open');
  });

  //detecting height changes. run this when slider plugin creates children
  function defineContainer(){
    var changingContainer = $('.soliloquy-viewport');

    const heightObserver = new MutationObserver((ml, o) => {
      for (const m of ml) {
        console.log('The ' + m.attributeName + ' attribute was modified.');
      }
    });

    heightObserver.observe(changingContainer[0], {
      attributes: true,
      subtree: false
    });
  }

  //detecting when children are created
  const childrenObserver = new MutationObserver((ml, o) => {
    defineContainer();
  });

  //define variable for children observer
  let $featuredImage = $('#featured-image');

  childrenObserver.observe($featuredImage[0], {
    attributes: false,
    subtree: true,
    childList: true
  });

});
