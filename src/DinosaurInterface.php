<?php

/**
 * @file
 * Contains Drupal\dinodb\DinosaurInterface.
 */

namespace Drupal\dinodb;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Dinosaur entities.
 *
 * @ingroup dinodb
 */
interface DinosaurInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {
  // Add get/set methods for your configuration properties here.

}
