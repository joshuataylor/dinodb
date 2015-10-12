<?php

/**
 * @file
 * Contains dinosaur.page.inc.
 *
 * Page callback for Dinosaur entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Dinosaur templates.
 *
 * Default template: dinosaur.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_dinosaur(array &$variables) {
  // Fetch Dinosaur Entity Object.
  $dinosaur = $variables['elements']['#dinosaur'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
