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
print_r(array_keys($form));
?>

<div class="cdhj-submit-form">

<?php
print drupal_render($form['title']);
?>

<?php
print drupal_render($form['body_field']);
?>

<?php
dsm($form['locations']);
print drupal_render($form['locations']);
?>

<?php
print drupal_render($form['field_image']);
?>

<?php
print drupal_render($form['taxonomy']);
?>

</div>

<?php
