<?php
/**
 * This is a bunch of custom form code to show a much prettier 
 * memory create form on the neighborhood page.
 * Extensive use of suggestions at:
 *   http://drupal.org/node/601646
 **/

// if you're looking at a destination page then save it to a variable for use later
//dsm($form);

// remove field labels
/*
unset($form['field_memory_destination']['nid']['nid']['#title']);
unset($form['taxonomy'][$vid]['#title']);
unset($form['field_memory_audio'][0]['#title']);
unset($form['field_memory_text'][0]['value']['#title']);
unset($form['field_memory_photo'][0]['#title']);

// make the textarea non-resizeable
$form['field_memory_text']['#resizable'] = false;

// remove some other buttons
unset($form['buttons']['preview']);
unset($form['buttons']['delete']);
unset($form['buttons']['preview_changes']);
*/

//dsm($form['locations']);

drupal_set_html_head('<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>');
jquery_ui_add(array("jquery.ui.core","jquery.ui.widget","jquery.ui.position","jquery.ui.autocomplete"));
drupal_add_js(drupal_get_path('theme', 'cdh_juarez') . '/js/location-autocomplete.js');

?>
<div class="row cdhj-submit-form">


    <div class="sixcol">
    
        <?php print drupal_render($form['title']); ?>
        
        <?php print drupal_render($form['body_field']); ?>
        
    </div>
    
    <div class="sixcol last">
    
        <div class="form-item">
            <?php print drupal_render($form['field_image']); ?>
        </div>

        <div class="form-item" id="edit-fake-location-wrapper">
            <label for="edit-fake-location">Location:</label>
            <input type="text" maxlength="128" name="fake-location" id="edit-fake-location" size="60" value="" class="form-text" />
        </div>
        <?php print drupal_render($form['locations']); ?>

        <?php print drupal_render($form['language']); ?>
    
        <?php print drupal_render($form['taxonomy']); ?>
    
    </div>

    <div class="row">
        <div class="twelvecol last cdhj-buttons">
        
        <?php print drupal_render($form); ?>
        
        </div>
    </div>

</div>

<?php
