<?php

function mytheme_preprocess_node(&$vars) {
	$vars['art_image'] = drupal_render($vars['content']['field_image']);
}