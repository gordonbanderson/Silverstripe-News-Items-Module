<?php
/**
* Defines the NewsItemPage page type
*/
class NewsItem extends Page {
  static $db = array(
    'DateOfNews' => 'Date',
    'ShowOnHomePage' => 'Boolean'

  );
  static $has_one = array(
  'MainPhoto' => 'Image',
  );
  
  
  // Hide terms from the LHS menu, could be a lot
    static $defaults = array( 
    'ShowInMenus' => 1,
    'ShowInSearch' => 1
    );


  function getCMSFields() {
    $fields = parent::getCMSFields();
    $fields->addFieldToTab('Root.Content.Main', new DatePickerField('DateOfNews'), 'Content');

    $fields->addFieldToTab("Root.Content.Image", new ImageField('MainPhoto'));


    $fields->renameField("DateOfNews", "News Item Date");


    //Use six newest for now
    //$fields->addFieldToTab("Root.Content.Main", new CheckboxField('ShowOnHomePage'));
    //$fields->renameField("ShowOnHomePage", "Show on home page?");

    
    
   
    
    /*
    $fields->addFieldToTab('Root.Content.Main', new CalendarDateField('Date'), 'Content');

    $fields->addFieldToTab('Root.Content.Main', new CalendarDateField('Date'), 'Content');
    $fields->addFieldToTab('Root.Content.Main', new TextField('Author'), 'Content');
    */
    return $fields;
  }
  
}

class NewsItem_Controller extends Page_Controller {
  
}

?>
