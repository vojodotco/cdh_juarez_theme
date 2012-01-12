<?php
/**
 * This is a bunch of custom form code to show a much prettier story create form within the group
 * Extensive use of suggestions at:
 *   http://drupal.org/node/601646
 **/

// remove some other buttons
unset($form['buttons']['preview']);
unset($form['locations']);

// include the libraries for geocoding from the single address text input field
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
            <input type="text" maxlength="128" name="locations[0][name]" id="edit-locations-0-name" 
                value="<?php print $form['#parameters'][2]->locations[0]['name'] ?>" 
                size="60" class="form-text" />
            <input id="edit-locations-0-locpick-user-latitude" type="hidden" 
                value="<?php print $form['#parameters'][2]->locations[0]['latitude'] ?>" 
                name="locations[0][locpick][user_latitude]">
            <input id="edit-locations-0-locpick-user-longitude" type="hidden" 
                value="<?php print $form['#parameters'][2]->locations[0]['longitude'] ?>" 
                name="locations[0][locpick][user_longitude]">            
        </div>
        

        <?php print drupal_render($form['language']); ?>
    
        <?php print drupal_render($form['taxonomy']); ?>
    
    </div>

    <input type="hidden" name="og_groups[10054]" id="edit-og-groups-10054" value="10054" class="form-checkbox og-audience">

    <div class="row">
        <div class="twelvecol last cdhj-buttons">
        
        <?php print drupal_render($form); ?>
        
        </div>
    </div>

</div>

<?php
