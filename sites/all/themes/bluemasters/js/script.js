// JavaScript Document
$(document).ready(function() {

  var supports3DTransforms =  document.body.style['webkitPerspective'] !== undefined || 
                              document.body.style['MozPerspective'] !== undefined;

  function linkify( selector ) {
      if( supports3DTransforms ) {
          
          var nodes = selector;

          for( var i = 0, len = nodes.length; i < len; i++ ) {
              var node = nodes[i];

              if( !node.className || !node.className.match( /roll/g ) ) {
                  node.className += ' roll';
                  node.innerHTML = '<span data-title="'+ node.text +'">' + node.innerHTML + '</span>';
              }
          }
      }
  }

  linkify($('#navigation a'));

});
