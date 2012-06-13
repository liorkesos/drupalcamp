<?php
/**
 * Doil: A sub-theme of Tendu - A CSS theme for developers
 * Author: Tom Bigelajzen - http://tombigel.com
 */

// This should have been in doil_preprocess_page, didn't work there :s
$mobile_select = 'jQuery("#main-nav ul").mobileSelect({ deviceWidth: 800 })';
drupal_add_js($mobile_select, 'inline', 'footer');

/**
 * Put language block in page.tpl
 * 
 * @return 
 * @param $language_switcher: the contents of locale_block['content']
 */
function doil_preprocess_page(&$vars) {
    $lang_switch =  module_invoke('locale', 'block', 'view');
    $vars['language_switcher'] = $lang_switch['content'];
  }

function doil_preprocess_node(&$vars) {
  if (module_exists('notifications_ui')) {
    $notifications_links = module_invoke('notifications_ui', 'link', 'node', $vars['node']);
    if (is_array($notifications_links)) {
      foreach ($notifications_links as $link) {
        $vars['notifications_links'][] = l($link['title'], $link['href'], $link);
      }
    }
  }
}

/**
 * Filter tags from user signature.
 */
function doil_preprocess_comment(&$variables) {
  $comment = $variables['comment'];
  $variables['signature'] = strip_tags($comment->signature, '<p><a><br>');
}
