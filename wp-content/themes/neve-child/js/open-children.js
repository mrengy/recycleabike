jQuery(document).ready(function($){
  //open and close child element in menu
  $('.menu-item-has-children .menu-item-title-wrap').click(function(){
    console.log('parent clicked');
    $(this).closest('li').find('.caret-wrap').toggleClass('dropdown-open');
    $(this).closest('li').find('ul.sub-menu').toggleClass('dropdown-open');
  });

  //resize container for image slider

  // Callback function to execute when mutations are observed
  const callback = function(mutationsList, observer) {
      // Use traditional 'for loops' for IE 11
      for(const mutation of mutationsList) {
          if (mutation.type === 'childList') {
              console.log('A child node has been added or removed.');
          }
          else if (mutation.type === 'attributes') {
              console.log('The ' + mutation.attributeName + ' attribute was modified.');
          }
      }
  };

  const observer = new MutationObserver(callback);

  //set up your configuration
  //this will watch to see if you insert or remove any children
  const config = { attributes:true, subtree: false };

  var changingContainer = $('.soliloquy-viewport');

  //start observing
  observer.observe(changingContainer, config);

});
