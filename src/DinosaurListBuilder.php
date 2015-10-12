<?php

/**
 * @file
 * Contains Drupal\dinodb\DinosaurListBuilder.
 */

namespace Drupal\dinodb;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Routing\LinkGeneratorTrait;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of Dinosaur entities.
 *
 * @ingroup dinodb
 */
class DinosaurListBuilder extends EntityListBuilder {
  use LinkGeneratorTrait;
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Dinosaur ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\dinodb\Entity\Dinosaur */
    $row['id'] = $entity->id();
    $row['name'] = $this->l(
      $this->getLabel($entity),
      new Url(
        'entity.dinosaur.edit_form', array(
          'dinosaur' => $entity->id(),
        )
      )
    );
    return $row + parent::buildRow($entity);
  }

}
