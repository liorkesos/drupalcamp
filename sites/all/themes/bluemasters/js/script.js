// JavaScript Document
$(document).ready(function() {

  Drupal.sasson = {};

  /**
   * This script will watch files for changes and
   * automatically refresh the browser when a file is modified.
   */
  Drupal.sasson.watch = function(url, instant) {
    
    var request;
    var dateModified;

    // Check the last time the file was modified
    request = $.ajax({
      type: "HEAD",
      url: url,
      success: function () {
        dateModified = request.getResponseHeader("Last-Modified");
        interval = setInterval(check,1000);
      }
    });

    var updateStyle = function(filename) {
      var headElm = $("head > link[href*='" + filename + ".css']");
      headElm.attr('href', headElm.attr('href') + 's');
      dateModified = request.getResponseHeader("Last-Modified");
    };

    // Check every second if the timestamp was modified
    var check = function() {
      request = $.ajax({
        type: "HEAD",
        url: url,
        success: function () {
          if (dateModified != request.getResponseHeader("Last-Modified")) {
            var filename = url.split('.');
            // filename = filename[filename.length - 1].split('.');
            var fileExt = filename[1];
            filename = filename[0];
            if (instant && fileExt == 'css') {
              // css file - update head
              updateStyle(filename);
            } else if (instant && (fileExt == 'scss' || fileExt == 'sass')) {
              // SASS/SCSS file - trigger sass compilation with an ajax call and update head
              $.ajax({
                url: "",
                success: function () {
                  updateStyle(filename);
                }
              });
            } else {
              // Reload the page
              location.reload();
            }
          }
        }
      });
    };
  };

  Drupal.sasson.watch('/drupalcamp/sites/all/themes/bluemasters/style.css', true);
  Drupal.sasson.watch('/drupalcamp/sites/all/themes/bluemasters/style-rtl.css', true);

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

  linkify($('#navigation > ul > li > a'));

  $('#navigation').each(function() {
    $(this).find('li.expanded:not(.active-trail)').addClass('hidden').find('ul').hide();
  });

  $('#navigation li.expanded.hidden').hover(function() {
      $(this).siblings('li:not(.hidden)').find('ul').fadeOut("slow");
      $(this).find('ul').fadeIn("slow");
    }, function() {
      $(this).siblings('li:not(.hidden)').find('ul').fadeIn("slow");
      $(this).find('ul').fadeOut("slow");
  });

});
