<?php

/**
 * @file
 * Contains Drupal\dinodb\Entity\Dinosaur.
 */

namespace Drupal\dinodb\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Dinosaur entities.
 */
class DinosaurViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['dinosaur']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Dinosaur'),
      'help' => $this->t('The Dinosaur ID.'),
    );

    return $data;
  }

}
