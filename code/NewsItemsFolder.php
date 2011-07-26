<?php
/**
 * Defines the NewsItem page type
 */
class NewsItemsFolder extends Page {
   static $db = array(
   );
  
   
   static $allowed_children = array('NewsItem');
}
 
class NewsItemsFolder_Controller extends Page_Controller {
 
}
 
?>
