jQuery(document).ready(function($){
  //open and close child element in menu
  $('.menu-item-has-children .menu-item-title-wrap').click(function(){
    console.log('parent clicked');
    $(this).closest('li').find('.caret-wrap').toggleClass('dropdown-open');
    $(this).closest('li').find('ul.sub-menu').toggleClass('dropdown-open');
  });

  //define variable for changing container
  var changingContainer;
  var letSliderLoad = window.setTimeout((defineContainer), 500);

  function defineContainer(){
    changingContainer = $('.soliloquy-viewport');

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

  /*
  let $featuredImage = $('#featured-image');
  var changingContainer = $('.soliloquy-viewport');

  //mutation observer to capture div when it's created
  const childrenObserver = new MutationObserver((ml, o) => {
    for (const m of ml) {
      changingContainer = $('.soliloquy-viewport');
    }
  });

  childrenObserver.observe($featuredImage[0], {
    attributes: false,
    subtree: true,
    childList: true
  });
  */

  //resize container for image slider
  //let $changingContainer = $('.soliloquy-viewport');


});
